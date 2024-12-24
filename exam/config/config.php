<?php

class Config{

    private $localhost = "localhost";
    private $username ="root";
    private $password = "";
    private $database = "customer";
    private $connection;

    function __construct(){
        $this->connection = mysqli_connect($this->localhost, $this->username, $this->password,$this->database);
    }

    public function insertCustomerData($name,$email,$phone)
    {
        $query = "INSERT INTO users (name,email,phone) VALUES ('$name','$email','$phone')";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }
 
    public function retrieveCustomerData()
    {
        $query = "SELECT * FROM users";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    public function insertProductData($p_name,$price)
    {
        $query = "INSERT INTO products (p_name,price) VALUES ('$p_name','$price')";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    public function updateProductData($id,$p_name,$price)
    {
        $query = "UPDATE products SET p_name='$p_name',price='$price' WHERE id=$id";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }
    public function insertOrderData($order_date,$status)
    {
        $query = "INSERT INTO orders (order_date,status) VALUES ('$order_date','$status')";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    public function deleteOrderData($id)
    {
        $query = "DELETE FROM orders WHERE id=$id";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

}