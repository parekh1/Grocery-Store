<?php
// database connection code
if(isset($_POST['Submit']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mydb');

// get the post records
$id=$_POST['id'];
$txtname = $_POST['txtName'];
$txtaddress = $_POST['txtEmail'];
$txtitem=$_POST['item_bought'];

// database insert SQL code
$sql = "INSERT INTO `customer` ( `idCustomer`,`CustomerName`, `Address`,  `ItemBought` ) VALUES ('$id','$txtname','$txtaddress','$txtitem')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

else
{
	echo "Are you a genuine visitor?";
	
}
}
?>

<!-- Update code -->
<?php
// database connection code
if(isset($_POST['Update']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mydb');

// get the post records
$id=$_POST['id'];
$txtname = $_POST['txtName'];
$txtaddress = $_POST['txtEmail'];
$txtitem=$_POST['item_bought'];

// database insert SQL code
$sql = "UPDATE `customer` SET CustomerName ='$_POST[txtName]', Address='$_POST[txtEmail]',  ItemBought='$_POST[item_bought]' WHERE idCustomer='$_POST[id]'";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Updated ";
}

else
{
	echo "Are you a genuine visitor?";
	
}
}
?>
<!-- pdf code -->