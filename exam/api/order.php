<?php 

header("Access-Control-Allow-Methods:POST,PATCH,PUT");
header("Content-Type:application/json");

include("../config/config.php");

$orders = new Config();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $order_date =$_POST['order_date'];
    $status =$_POST['status'];
    
    if(!empty($order_date) && !empty($status))
    {
        $res = $orders->insertOrderData($order_date,$status);
        $arr['msg']='Value is Added !';   
    
    }else{
        $arr['error']='Value is empty !';
    }
}
else if($_SERVER["REQUEST_METHOD"]=="DELETE")
{
    $data = file_get_contents("php://input");
    parse_str($data, $result);

    $id = $result["id"];

    if(!empty($id))
    {
        $res = $orders->deleteOrderData($id);
        $arr['msg']='Value is deleted !';
    }else{
        $arr['error']='Value is empty !';
    }
}
else{
    $arr['error']='Only Post,Delete Method is Allowed !';
}

echo json_encode($arr);