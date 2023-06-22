<?php
 class Database
 {
    //PDO ket noi CSDL
    public $conn= NULL;
    //Doi tuong PDOStatement
    public $pdo_stm=NULL;

    function __construct()
    {   
    
    
        try
        {   
            //TTMH test local db
            $this->conn = new PDO("mysql:host = localhost, dbname = T2207E_PHP_TestProject_TTMH2", "root", "root");
            //$this->conn = new PDO("mysql:host = localhose, dbname = Project2", "root", "root");
            $this->conn->query("SET NAMES UTF8");
        }
        catch(PDOException $ex)
        {
            echo "<h3>" .$ex->getMessage(). "</h3>";
            die("<h3>Loi ket noi CSDL</h3>");
        }
    }

    //Ham thuc thi dùng chung cho SELECT, INSERT, UPDATE, UPDATE
    //$sql: Cau lenh SQL can thuc thi
    //$data: mang chua du lieu
    function set_query($sql, $param = null)
    {   
        $ketqua=FALSE;
        if($this->conn ==NULL)
        {
            return FALSE;
        }
        $this->pdo_stm = $this->conn->prepare($sql);
        if($param==NULL)//thực thi $sql không tham số ?
            $ketqua = $this->pdo_stm->execute(); 
        else//thực thi $sql binding tham số ? với giá trị mảng $pamram
            $ketqua = $this->pdo_stm->execute($param);
        return $ketqua;

    }
 }
 ?>