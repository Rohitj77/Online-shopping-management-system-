
<?php
session_start();
?>
<html>
	<head>

	<style>

		body
		{
			background-color: #137f83;
		}

		table
			{
				background-color:white;
			}
	</style>
	</head>
	<body>
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



if(isset($_POST['admin_data']))
{

$query1 = "SELECT * FROM signup";
$data1 = mysqli_query($conn1,$query1);
$total1 = mysqli_num_rows($data1);

$result1 = mysqli_fetch_assoc($data1);

$query2 = "SELECT * FROM cart_product";
$data2 = mysqli_query($conn2,$query2);
$total2 = mysqli_num_rows($data2);

$result2 = mysqli_fetch_assoc($data2);





	if($total1!=0 && $total2!=0 )
	{
		?>
		 <h2 align="center"><mark>Displaying All Customer Records</mark></h2>
		<center><table border="3" cellspacing="8" width="70%">
			<tr>
			<th width="10%">Number</th>
			<th width="10%">Customer Name</th>
				<th width="10%">Customer Address</th>
				<th width="10%">Customer Mo no</th>
				<th width="10%">Products Numer</th>
				<th width="10%">Products Name</th>
				<th width="10%">Products Price</th>
				
			</tr>
	
	
		<?php



while($result2 = $result2 = mysqli_fetch_assoc($data2)  )

{
	echo "<tr>
	<td>".$result1[cno]."</td>
	<td>".$result1[name]." </td>
	<td>". $result1[address]."</td>
	<td>". $result1[mobile_no]."</td>
	<td>".$result2[product_number]."</td>
	<td>".$result2[product_name]."</td>
	<td>".$result2[product_price]."</td>";

}

?>


<?php
echo    "<tr> <td ></td>  <td ></td>   <td ></td><td ></td>  <td ></td><td >Total Price</td>   <td >".$_SESSION[total] ."</td>   </tr>";
	

	
}
	else
	{
		echo "<script>alert('No record found');</script>";
	}

	
?>
</table>
</center>
<?php
}

?>
</body>
</html>