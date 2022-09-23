<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="onlineshop";
error_reporting(0);
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
else{
    echo "conection sussesful";
}

$query = "SELECT * FROM signup";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
  
}
else
{
echo "<script>alert('No records found')</script>";    
}


$result = mysqli_fetch_assoc($data);

echo $result[name]." ".$result[address]." ".$result[mobile_no]." ".$result[username]." ".$result[password];
/*
if($total!=0)
{

}
else
{
echo "No records found"    
}

*/
?>