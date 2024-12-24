<?php 

header("Access-Control-Allow-Methods:POST,GET");
header("Content-Type:application/json");

include("../config/config.php");

$products = new Config();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $p_name =$_POST['p_name'];
    $price =$_POST['price'];


    if(!empty($p_name) && !empty($price))
    {
        $res = $products->insertProductData($p_name,$price); 
        $arr['msg']='Value is Added !';  
        
    }else{
        $arr['error']='Value is empty !';
    }
}
else if($_SERVER["REQUEST_METHOD"]=='PATCH'||$_SERVER["REQUEST_METHOD"]=='PUT')
{
    $data = file_get_contents("php://input");
    parse_str($data, $result);
    $id =$result['id'];
    $p_name =$result['p_name'];
    $price =$result['price'];

    if(!empty($id) &&!empty($p_name) && !empty($price))
    {
        $res = $products->updateProductData($id,$p_name,$price);
        $arr['msg']='Value is Updated !';  
    
    }else{
        $arr['error']='Value is empty !';
    }
}
else{
    $arr['error']='Only Post and Update Method is Allowed !';
}

echo json_encode($arr);