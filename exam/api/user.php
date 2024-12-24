<?php 

header("Access-Control-Allow-Methods:POST,GET");
header("Content-Type:application/json");

include("../config/config.php");

$users = new Config();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone = $_POST['phone'];

    if(!empty($name) && !empty($email) && !empty($phone))
    {
        $res = $users->insertCustomerData($name,$email,$phone); 
        $arr['msg']='Value is Added !';    

    }else{
        $arr['error']='Value is empty !';
    }
}
else if($_SERVER["REQUEST_METHOD"]=='GET')
{
    $arr=[];
    $data =$users->retrieveCustomerData();
    
        while($row = mysqli_fetch_assoc($data))
        {
            array_push($arr,$row);
        }
    
}
else{
    $arr['error']='Only Post and Get Method is Allowed !';
}

echo json_encode($arr);












