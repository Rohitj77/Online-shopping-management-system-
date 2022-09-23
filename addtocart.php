<?php

session_start();
/*
$server_name="localhost";
$username="root";
$password="";
$database_name="cart";
error_reporting(0);
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
else{
   // echo "conection sussesful";
}
*/



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['addtocart']))
    {
        if(isset($_SESSION['cart']))
         {
             $count=count($_SESSION['cart']);
             $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
             print_r($_SESSION['cart']);
         }
         else
         {
             $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
             print_r($_SESSION['cart']);
         }
    }
}




?>