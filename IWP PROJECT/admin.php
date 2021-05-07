<?php 
include('connection.php')
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="s1.css"/>
	<style type="text/css">
		td{
			width: 200px;
			height: 50px;
		}
	</style>
</head>
<body >
<div id="full">
	<div id="inner_full">
		<div id="header"><h2>Inventory Management System</h2></div>
		<div id="sub-header">
			<ul>
                    <li><a href="employee.php"> Employee</a></li>&nbsp; &nbsp;&nbsp; &nbsp;
                    <li><a href="supplier_list.php"> Supplier Data</a></li>&nbsp; &nbsp;&nbsp; &nbsp;
                    <li><a href="supplier.php"> Supply order</a></li>&nbsp; &nbsp;&nbsp; &nbsp;
                    <li><a href="customer.php"> Customer Data</a></li>&nbsp; &nbsp;&nbsp; &nbsp;
                    <li><a href="stock.php"> Stock</a></li>&nbsp; &nbsp;&nbsp; &nbsp;
                    <li><a href="account.php"> Accounts</a></li>&nbsp; &nbsp;&nbsp; &nbsp;
                    <li><a href="category.php"> Category</a></li>&nbsp; &nbsp;&nbsp; &nbsp;
                    <li><a href="department.php"> Department</a></li>
            </ul>
        </div>
		<div id="body">
			<center>
			<h2>Current Stock</h2>
			<div id="form">
			 <table>
			 	<tr>
			 		<td><center><b>Item</b></center></td>
			 		<td><center><b>Next_Date</b></center></td>
			 		<td><center><b>Quantity</b></center></td>
			 		<td><center><b>E_ID</b></center></td>
			 	</tr>
			 	<?php
			 	$q=$db->query("SELECT * FROM stock");
			 	while($r=$q->fetch(PDO::FETCH_OBJ))
			 	{
			 	  ?>
			 	<tr>
			 		<td><center><?=$r->Item; ?></center></td>
			 		<td><center><?=$r->Next_Date; ?></center></td>
			 		<td><center><?=$r->Quantity; ?></center></td>
			 		<td><center><?=$r->E_ID; ?></center></td>
			 	</tr>
			 	<?php
			 }
			 ?>
			 </table>
		</div></center>
	</div>
		<div id="footer"><p><a href="index.php" >Logout</a></p></div>
	</div>
</div>
</body>
</html>