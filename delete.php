<html>
  <head>
    <style>

    body
    {
      background-color: #137f83;
    }
     .btn
     {
       margin:20px;
       
     }

      </style>
      </head>

<body>
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="cart";
error_reporting(0);

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection

//window.location.href='addtocartdemo.php'
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
else
{
//echo "Connection successful";
}

$C_no=$_GET['C_no'];
$query = "DELETE FROM cart_product  WHERE C_no='$C_no'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "Record delete successfully ";
      
    ?>
  <form action="addtocartdemo.php" method="POST">
   <div class="btn"> <input type="submit" name="addd" value="ok"></div>
   <!-- <meta http-equiv='refresh' content="0; url=http://localhost:8080/templets/delete.php"/>--></form><?php
   
}
else
{
    echo "<script>alert('Record not deleted ');</script>";
}


mysqli_close($conn);
?>



</body>
</html>