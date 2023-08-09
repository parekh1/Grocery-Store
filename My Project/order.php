<?php
// database connection code
if(isset($_POST['Submit']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mydb');
// get the post records
$cid=$_POST['customerid'];
$order = $_POST['order'];
$invoice = $_POST['invoice'];
$dispached=$_POST['Dispached'];

// database insert SQL code
$sql ="INSERT INTO `order` (`idorder`, `dispatched_date`, `invoiced_date`,`Customer_idCustomer`) VALUES ('$order', '$dispached', '$invoice',$cid)";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo " Order Records Inserted";
}

else
{
	echo "Are you a genuine visitor?";
	
}
}
?>

<!-- update code -->

<?php
// database connection code
if(isset($_POST['Update']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mydb');
// get the post records

$order = $_POST['order'];
$invoice = $_POST['invoice'];
$dispached=$_POST['Dispached'];

// database insert SQL code
$sql = "UPDATE `order` SET  dispatched_date='$_POST[Dispached]', invoiced_date='$_POST[invoice]' WHERE idorder='$_POST[order]'";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Order Records Updated";
}

else
{
	echo "Are you a genuine visitor?";
	
}
}
?>