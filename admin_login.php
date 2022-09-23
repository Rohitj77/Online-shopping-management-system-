<?php

if(isset($_POST['login_admin']))
{




$uname =$_POST['username_log'];
$password =$_POST['password_log'];


if($uname==="root"  && $password==="root123")
{
    echo "<script>alert(' Admin Login Successful');
    window.location.href='admin_home.html'</script>";
}
else
{
   
    echo "<script>alert('  Admin Login Unuccessful');
    window.location.href='admin_login.html'</script>" ;
}



}
?>


