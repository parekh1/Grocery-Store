<?php
// database connection code
if(isset($_POST['Submit']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mydb');
// get the post records
$id=$_POST['id'];
$txtname = $_POST['txtName'];
$txtaddress = $_POST['txtmail'];
$txtEmail=$_POST['txtemail'];
// database insert SQL code

$sql = "INSERT INTO `Supplier` ( `idSupplier`,`SupplierCompanyName`, `SupplierAddress`,`SupplierEmail` ) VALUES ('$id','$txtname','$txtaddress','$txtEmail')";
// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Supplier Records Inserted";
}
else
{
	echo "Are you a genuine visitor?";
}
}
?>

<!-- Update Record -->
<?php
// database connection code
if(isset($_POST['Update']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mydb');
// get the post records
$id=$_POST['id'];
$txtname = $_POST['txtName'];
$txtaddress = $_POST['txtmail'];
$txtEmail=$_POST['txtemail'];
// database  SQL code
$sql = "UPDATE `Supplier` SET SupplierCompanyName='$_POST[txtName]' ,SupplierAddress='$_POST[txtmail]', SupplierEmail='$_POST[txtemail]' WHERE idSupplier='$_POST[id]' ";
// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Supplier Records Update ";
}
else
{
	echo "Are you a genuine visitor?";
}
}
?>