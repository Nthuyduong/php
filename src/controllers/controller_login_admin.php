<?php
session_start();
require_once("../models/model_login.php");

if(isset($_REQUEST["b1"])==false)
{   
    $alert_title="Ban chua dang nhap";
    $alert = "Moi dang nhap lai";
    require_once("../views/includes/alert.php");
    die();
} 
$user = $_REQUEST["admail"];
$pass = $_REQUEST["adpass"];
$pass = md5($pass);
$login = new model_login();
//kiem tra tai khoan xem da login hay chua? Ham kiem tra?
$ketqua = $login->CheckLoginAdmin($user,$pass);
if($ketqua == false)
{   
    $alert_title="Loi truy van CSDL";
    $alert = "Loi truy van CSDL";
}
else{
    $row = $login->data;
    //Dang nhap thanh cong
    if($row != null)
    {
        if($row["Active_status"]==1)
        {
            $_SESSION["logined_admin"] = "OK";
            $_SESSION["user"] = $row["Email"];
            $alert_title="Dang nhap thanh cong";
            $alert = "Dang nhap thanh cong";
            $link_tieptuc="../views/index/admin_dashboard.php";
        }
        else
        {   
            $alert_title="Tai khoan da bi khoa";
            $alert = "Vui long dang nhap tai khoan khac";
            $link_tieptuc="../views/index/admin_login.php";
        }
    }
    else
    {
        $alert_title = "Dang nhap sai user hoac password";
        $alert = "Vui long dang nhap lai";
        $link_tieptuc="../views/index/admin_login.php";
    }
}    
require_once("../views/includes/alert.php")

?>