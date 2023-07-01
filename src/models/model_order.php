<?php
require_once("model_database.php");
class model_order extends Database
{
    public $data;

    //Conect Database
    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }
    //Lay thong tin trong bang order
    function GetOrder()
    {
        $sql = "SELECT o.Code, o.Customer_ID, o.Status, o.Created_at, c.Name AS Customer_name, p.Payment_method, gt.Grandtotal AS grandtotal
        FROM Orders o
        INNER JOIN Customers c ON o.Customer_ID = c.ID
        INNER JOIN Payments p ON o.Code = p.Order_code
        INNER JOIN (
            SELECT ot.Order_code, SUM(ot.Price) AS Grandtotal
            FROM Order_items ot
            WHERE ot.Order_code IN (SELECT Code FROM Orders)
            GROUP BY ot.Order_code) gt ON o.Code = gt.Order_code";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Tim hoa don
    function FindOrder($code)
    {
        $sql = "SELECT o.Code, o.Customer_ID, o.Status, o.Created_at, c.Name AS Customer_name, p.Payment_method, gt.Grandtotal AS grandtotal
        FROM Orders o
        INNER JOIN Customers c ON o.Customer_ID = c.ID
        INNER JOIN Payments p ON o.Code = p.Order_code
        INNER JOIN (
            SELECT ot.Order_code, SUM(ot.Price) AS Grandtotal
            FROM Order_items ot
            WHERE ot.Order_code IN (SELECT Code FROM Orders)
            GROUP BY ot.Order_code) gt ON o.Code = gt.Order_code
        WHERE TRUE";
        $param = NULL;
        if($code!="")
        {
            $sql .= " AND o.Code=?";
            $param=[$code];    
        }
        //echo $param;
        $ketqua = $this->set_query($sql,$param);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;//false hoac null
    }

    //Lay danh sach hoa don

    //Tinh tong tien san pham (GRAND TOTAL)
    function GrandTotal()
    {
        $sql = "SELECT SUM(ot.Price) AS Grandtotal
        FROM Order_items ot
        WHERE ot.Order_code IN (SELECT Code FROM Orders)
        GROUP BY ot.Order_code";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
    
}
?>