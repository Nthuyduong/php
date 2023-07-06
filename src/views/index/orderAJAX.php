<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$findOrder = isset($_REQUEST["findOrder"]) ? $_REQUEST["findOrder"] : "";
$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] : "";
$payment = isset($_REQUEST["payment"]) ? $_REQUEST["payment"] : "";
require_once("../../models/model_order.php");
$orders = new model_order();

$ketqua = $orders->FindOrder($findOrder, $status, $payment);
if ($ketqua == false) {
    echo "EROOR";
} else {
    $rows = $orders->data;
    if ($rows != NULL)
        foreach ($rows as $row) {
?>
        <div class="tb-row">
            <div class="cell"><?= $row["Code"] ?></div>
            <div class="cell-md"><?= date("d-m-Y", strtotime($row["Created_at"])) ?></div>
            <div class="cell-md"><?= $row["Customer_name"] ?></div>
            <div class="cell"><?= $row["Payment_method"] ?></div>
            <div class="cell"><?= $row["grandtotal"] ?></div>
            <div class="cell stt-out">
                <div class="stt stt1"><?= $row["Status"] ?></div>
            </div>
            <div class="cell">
                <select class="w-100">
                    <option>Pending</option>
                    <option>Processing</option>
                    <option>Delivered</option>
                    <option>Cancel</option>
                </select>
            </div>
            <div class="cell action-icon">
                <i class="fas fa-print" style="color: #ffffff;"></i>
                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
            </div>
        </div>
<?php
        }
}
?>