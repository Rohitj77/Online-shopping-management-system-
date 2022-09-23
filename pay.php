<?php
session_start();
?>


<html>

<style>
body
{  
    background-color: #137f83;
    height: 900px;
}

footer
{
    margin-top:170px;
}
.imgpay
{
    
    
    width: 300px;
    height: 450px;
     margin-left: 300px;
    margin-top: 90px;
  }

  .imgpaylogo
  {   margin-top: 0px;
      width: 90px;
      height: 94px;
      margin-right: 95%;
      display: flex;
  }
  .navbar
  {
      height: 90px;
  }
  .inline
  {
      display: flex;
  }
  .nm
  {
      font-size:20px;
      margin-left:0px;
    
  }
  li
  {
    margin-top: 0px;
      width: 30px;
      height: 34px;
    
  }
  .back
  {
      margin-top:10px;
      padding:20 70;
      font-size:20px;
      margin-right:30px;
      padding-left:29px;
      padding-top:6px;
      margin-top:2%;
      display: flex;
  }


</style>

    <head>
        <Title>Online Shoping Manejment Project </Title>

        <link rel="stylesheet" href="first.css">
       

    
    </head>
        <body> <div class="navbar">
        <form action="addtocartdemo.php" method="POST"> 
        <input type="submit" name="addd" value="Back" class="back" ></form>
        <a href="home.html"><input type="button"  value="Home" class="back" ></a>
            <a href="first.html"><img src="img/img6.jpeg" class="imgpaylogo" width="200px">    </a>
           
</div>
            <!--<nav> <div class="f1">
            
                     <ul>
                <li class="l"><a href="login.html"></a></li>
                <li class="l1"><a href="sign_up.html"></a></li>
                <li class="a_home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.html"><i class="fa fa-arrow-left"></i></a></li>
                 </ul> 
                </nav></div>-->


                <main><div class="inline">

                <li class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.html" ></i></a></li>
               <div>

               <?php



$server_name="localhost";
$username="root";
$password="";
$dbname1 = "onlineshop"; /* Database name 1 */
$dbname2 = "cart";
error_reporting(0);

$conn1=mysqli_connect($server_name,$username,$password,$dbname1);
//now check the connection
if(!$conn1)
{
	die("First Connection Failed:" . mysqli_connect_error());

}
else
{
//echo " First Connection successful";
}


$conn2=mysqli_connect($server_name,$username,$password,$dbname2);
//now check the connection
if(!$conn2)
{
	die("Second Connection Failed:" . mysqli_connect_error());

}
else
{
//echo " Second Connection successful";
}


$query1 = "SELECT * FROM signup";
$data1 = mysqli_query($conn1,$query1);
//$total = mysqli_num_rows($data);

$result1 = mysqli_fetch_assoc($data1);

$query2 = "SELECT * FROM cart_product";
$data2 = mysqli_query($conn2,$query2);
//$total = mysqli_num_rows($data);

$result2 = mysqli_fetch_assoc($data2);

?><br><br><br><br><div class="nm"><center><h1>User Informetion</h1></center></div><?php


echo "<br>

<h3>User Name:</h3>$result1[name]<br><br><br>
<h3>User Address:</h3>$result1[address] <br><br><br>
<h3>Mobile Number:</h3>$result1[mobile_no]<br><br><br>
<h3>Product Name:</h3>";

while($result2 = $result2 = mysqli_fetch_assoc($data2))
{
echo "<br>  $result2[product_name] <br>";

}

echo "<br><h3>Product Total Prise:</h3>".$_SESSION['total'] ."<br><br><br>";

    
 










?>
                
               </div>
                <div><img src="img/payqrn.jpg" class="imgpay" ></div> 
                </div></main>
              <!---  <footer>
                    <div>
                     <div class="first">
                                             <h4>Download our App</h4><br>
                               <small>Download App for Android<br>
                                    and ios mobile phone<br></small></div>
                      <div class="midal">
                        
                        <small>Our Purpose Is To Sustainably<br> 
                               Make The Pleasure And Benefits<br>
                               Of Sports Accessible To The Many.<br></small> 
                      </div> <div class="last1"> <h4>Useful Links</h4>
                             <small>
                                 Coupons<br>
                                 Return Policy<br>
                                 Blog Post<br>
                                 Join Affiliate<br></small>                                               
                            </div><div class="last">
                            <h4>Follow Us</h4>
                                <small>Facebook<br>
                                        Twitter<br>
                                        Instagram<br>
                                        YouTube<br>
                            </small>
                       
                        </div>    



                    </div>
                    </footer>-->
         
               

            </body>
            </html>