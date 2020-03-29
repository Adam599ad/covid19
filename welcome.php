<?php
session_start();
$conn = mysqli_connect('localhost','root','','payment');
  if (isset($_POST['submit'])){
  $account =$_POST['account'];
  $bvn =$_POST['bvn'];
  $query = mysqli_query($conn,"INSERT INTO verify(account,bvn) VALUES ($account,$bvn)");
 }
 session_close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Verify Payment</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/overwrite.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="dist/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <style type="text/css">
  button{
    border-radius: 15px;
  }
  </style>
</head>
<body>
  <h1 align="center">WELCOME TO MY PAYMENT E VERIFY SYSTEM</h1>
  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-6">
        <h4 class="title text-center">VERIFY HERE</h4>
        <form role="form" action="#" method="post">
          <div class="form-group">
            <label for="Name">Account number</label>
            <input type="text" class="form-control"  name="account" placeholder="please provide your account number " required maxlength="10">
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <label for="Lastname">Bvn</label>
            <input type="text" class="form-control" name="bvn" placeholder="please provide your Bvn " required maxlength="15">
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <button style="border-radius: 5px;" type="submit" class="btn btn-success" name="submit">Verify</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>