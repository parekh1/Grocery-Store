<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
  footer{
    background-color:grey;
  }
</style>
<title>Contact Form - PHP/MySQL Demo Code</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://t3.ftcdn.net/jpg/03/32/86/72/360_F_332867276_m7XiTTagNtOtKTekcB5hRzSUmlL40m7d.jpg" alt="" width="300" height="300">
        <h2>Data Entry Form</h2>
      </div>
      <h2>Customer Form</h2>
      <br>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="customer.php">
    <p>
    <label for="Name">Customer ID </label>
      <input type="number" class="form-control" name="id" id="id"   placeholder="Enter here" value="" required>
    <p>
      <label for="Name">Customer Name </label>
      <input type="text" class="form-control" name="txtName" id="txtName"   placeholder="Enter here" value="" required>
	  <div class="invalid-feedback">
                  Valid name is required.
                </div>
    </p>
    <p>
      <label for="address">Customer Email Address</label>
      <input type="email"  class="form-control"  name="txtEmail" id="txtEmail"  placeholder="Enter here" value="" required>
    </p>
    <p>
      <label for="item_bought">Item Bought</label>
      <input type="text"  class="form-control" name="item_bought" id="item_bought" placeholder="Enter here" value="" required>
    </p>
    <input type="submit" name="Submit" id="Submit" value="Submit"  class="btn btn-primary btn-lg btn-block">
    <input type="submit" name="Update" id="Update" value="Update"  class="btn btn-primary btn-lg btn-block">
    <input type="submit" name="Generate PDF" id="PDF" value="PDF"  class="btn btn-primary btn-lg btn-block">
    <p>&nbsp;</p>
  </form>
</fieldset>

<h2>Supplier Form</h2>
<fieldset>
  <form name="frmContact" class="needs-validation " method="post" action="supplier.php">
  <p>
    <label for="Name">Supplier ID </label>
      <input type="number" class="form-control" name="id" id="id"   placeholder="Enter here" value="" required>
  <p>
      <label for="Name">Supplier Company Name </label>
      <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Enter here" value="" required>
	  <div class="invalid-feedback">
                  Valid name is required.
                </div>
    </p>
    <p>
      <label for="address">Supplier Address</label>
      <input type="text"  class="form-control"  name="txtmail" id="txtmail" placeholder="Enter here" value="" required>
    </p>
    <p>
      <label for="address">Supplier Email Address</label>
      <input type="email"  class="form-control"  name="txtemail" id="txtemail" placeholder="Enter here" value="" required>
    </p>
    <input type="submit" name="Submit" id="Submit" value="Submit"  class="btn btn-primary btn-lg btn-block">
    <input type="submit" name="Update" id="Update" value="Update"  class="btn btn-primary btn-lg btn-block">
    <input type="submit" name="Generate PDF" id="PDF" value="PDF"  class="btn btn-primary btn-lg btn-block">
  </form>
</fieldset>
<br>
<br>
<h2>Order Details Form</h2>
<fieldset>
  <form name="frmContact" class="needs-validation " method="post" action="order.php">
    <p>
    <?php
    $con = mysqli_connect('localhost', 'root', '','mydb');
    $customer_detail= "Select * from customer";
    $result=mysqli_query ($con ,$customer_detail);
    // foreach ($result as $row){
    //   echo $row['CustomerName'];
    //   // print_r($row);
    //   $i++;
    // }?>
    <label for="Name">Customer Id</label>
      <Select name="customerid">
        <?php
         foreach ($result as $row){
      echo "<option value=".$row['idCustomer'].">".$row['CustomerName']."</option>";
      // print_r($row);
      $i++;
    }
        ?>
        <option>
        </option>
      </Select>
      <br>
      <br>
      <label for="order">Order number</label>
      <input type="number" class="form-control" name="order" id="order" placeholder="Enter here" value="" required>
	  <div class="invalid-feedback">
                  Valid number is required.
                </div>
    </p>
    <p>
      <label for="date">Invoice Date</label>
      <input type="date"  class="form-control"  name="invoice" id="invoice" placeholder="Enter here" value="" required>
    </p>
    <p>
      <label for="date">Dispached Date</label>
      <input type="date"  class="form-control"  name="Dispached" id="Dispached" placeholder="Enter here" value="" required>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Submit"  class="btn btn-primary btn-lg btn-block">
      <input type="submit" name="Update" id="Update" value="Update"  class="btn btn-primary btn-lg btn-block">
      <input type="submit" name="Generate PDF" id="PDF" value="PDF"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<footer>
  Group 6 Vasu Chopra 
</footer>
</body>
</html>
