<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="onlineshop";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $add = $_POST['add'];
	 $mno = $_POST['mno'];
	 $uname = $_POST['uname'];
	 $pass = $_POST['pass'];
   
	 
	 $sql_query = "INSERT INTO signup(name,address,mobile_no,username,password)
	 VALUES ('$name','$add','$mno','$uname','$pass')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "<script>alert('New Details Entry inserted successfully !');</script>";
		echo "<script>location.replace('login.html');</script>";
        
	 } 
	 else
     {
		echo "<script>alert('New Details not inserted !');</script>";
		//echo "Error" . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>