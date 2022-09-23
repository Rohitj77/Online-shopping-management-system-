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
   // echo "conection sussesful";
}


if(isset($_POST['login_btn']))
{



$uname =$_POST['username_log'];
$password =$_POST['password_log'];

$username_serch ="select * from signup where username='$uname'";
$query = mysqli_query($conn,$username_serch);
$uname_count = mysqli_num_rows($query); //check perticular  username which rows

if($uname_count)
{
    $uname_pass = mysqli_fetch_assoc($query);
    $db_pass =$uname_pass['password'];
    //$pass_decode=password_verify($password,$db_pass);
    if($password===$db_pass)
    {
        echo "login successful";
        ?>
        <script>location.replace("home.html");</script>
        <?php
    }
    else
    {
        echo "password Incoreect";
    }
}   
else
{
        echo "Invalid username";  
 }




mysqli_close($conn);
}
?>


