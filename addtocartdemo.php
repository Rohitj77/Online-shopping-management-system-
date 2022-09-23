<?php
session_start();
?>

<html>
	<head>
	
		<title>Display Card Recorsd</title>
		<style>

			body
			{
				background-color: #137f83;
			}
			table
			{
				background-color:white;
			}
			.delete
			{
				background-color:red;
				color:white;
				border:0;
				outline:none;
				border-radius:5px;
				height:23px;
				width:80px;
				font-weight:bold;
				cursor:pointer;
			}
			.delete
			{
				background-color:red;
			}

            .pay
			{
				background-color:red;
				color:white;
				border:0;
				outline:none;
				border-radius:5px;
				height:23px;
				width:80px;
				font-weight:bold;
				cursor:pointer;
			}
			.pay
			{
				background-color:green;
			}
		


		</style>
	</head>
	
		




<?php



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
else
{
//echo "Connection successful";
}
if(isset($_POST['add']))
{	  $img = $_POST['image'];
	 $pname = $_POST['item_name'];
	 $price = $_POST['price'];
	 $p_no = $_POST['p_no'];
	 //$p_img=$_FILES['img'];


	 $filename = $_FILES["img"]["name"];
	 $tempname = $_FILES["img"]["tmp_name"];   
		 $folder = "img/".$filename;
	 
	 
	 $sql_query = "INSERT INTO cart_product ( product_img ,product_name ,product_price,product_number)
	  VALUES ('".$filename."','$pname','$price','$p_no')";
	 


if (mysqli_query($conn, $sql_query)) 
{
   echo "<script>alert('New Details Entry inserted successfully !');
   window.location.href='saree.php'</script>";
  // <script>location.replace("login.html");</script>
  // <?php
} 
else
{
   echo "Error" . $sql . "" . mysqli_error($conn);
}







if(isset($_POST['add']))

{
$query = "SELECT * FROM cart_product";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
$tot=0;
//
if($total!=0)
{
	?>
     <h2 align="center"><mark>Displaying All Cart Records</mark></h2>
    <center><table border="3" cellspacing="7" width="60%">
		<tr>
		<th width="10%">Number</th>
		<th width="10%">Product Number</th>
			<th width="10%">Product Image</th>
			<th width="10%">Product Name</th>
			<th width="10%">Product Prise</th>
			<th width="10%">Operations</th>
		</tr>


	<?php
    while($result = $result = mysqli_fetch_assoc($data))
	{
	
		echo "<tr>
		       <td>".$result[C_no]."</td>
			   <td>".$result[product_number]." </td>
		       <td><img src='". $result[product_img]."'></td>
			   <td>".$result[product_name]."</td>
			   <td>".$result[product_price]."</td>
			   <td><a href='delete.php?C_no=$result[C_no]'><input type='submit' value='delete' class='delete' onclick='return checkdelete()'></a></td></tr>";
			   $tot=$tot+$result[product_price];
			 
			  
	}

}
else
{
	echo "<script>alert('No record found');</script>";
}


$_SESSION['total'] = $tot;
echo "<tr><td></td><td></td><td></td><td>Total =</td><td>".$tot."</td>     <td><a href='pay.php?'><input type='submit' value='Pay Online' class='pay'></a></td> </tr>";

}

}
?>
</table>
</center>

<?php





if(isset($_POST['addd']))
{

$query = "SELECT * FROM cart_product";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
$tot=0;
//
if($total!=0)
{
	?>
     <h2 align="center"><mark>Displaying All Cart Records</mark></h2>
    <center><table border="3" cellspacing="7" width="60%">
		<tr>
		<th width="10%">Number</th>
		<th width="10%">Product Number</th>
			<th width="10%">Product Image</th>
			<th width="10%">Product Name</th>
			<th width="10%">Product Prise</th>
			<th width="10%">Operations</th>
		</tr>


	<?php
    while($result = $result = mysqli_fetch_assoc($data))
	{
	
		echo "<tr>
		       <td>".$result[C_no]."</td>
			   <td>".$result[product_number]." </td>
		       <td>". $result[product_img]."</td>
			   <td>".$result[product_name]."</td>
			   <td>".$result[product_price]."</td>
			   <td><a href='delete.php?C_no=$result[C_no]'><input type='submit' value='delete' class='delete' onclick='return checkdelete()'></a></td></tr>";
			   $tot=$tot+$result[product_price];
			 
			  
	}

}
else
{
	echo "<script>alert('No record found');</script>";
}


$_SESSION['total'] = $tot;
echo "<tr><td></td><td></td><td></td><td>Total =</td><td>".$tot."</td>     <td><a href='pay.php?'><input type='submit' value='Pay Online' class='pay'></a></td> </tr>";

}








?>	 
</table>
</center>


<script>
function checkdelete()
{

	return confirm('Are you sure your want to delete this record');
}

	if(window.history.replaceState)
	{
		window.history.replaceState(null,null,window.location.href);
	}
	
</script>


</html>