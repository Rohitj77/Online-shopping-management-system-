
<style   bgroundcolor:blue>
  
</style>

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

echo '<body style="background-color::#137f83">';
if(isset($_POST['forgot']))
{
    if(mysqli_query($conn,"UPDATE signup SET password='$_POST[password_for]' WHERE username='$_POST[username_for]'"))
    {
      ?>
       <script type="text/javascript">
         alert("Password update succesful");
         location.replace("login.html");
       </script>

      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Password update unsuccesful");
        
      </script>

     <?php
    }


    mysqli_close($conn);
}
?>
