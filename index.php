<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  
<!-- start php section  -->

<?php

// define variables and set to empty values


$allerr = $nameerr = $emailerr = $cityerr = $phoneerr = $passworderr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $city = $_POST["city"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];

  if(empty($name) && empty($email) && empty($city) && empty($phone) && empty($password)){

    $allerr = "Enter Vaild Data In Form";

  }elseif(empty($name)){
    $nameerr = "Please Enter Name";
  }elseif(empty($email)){
    $emailerr = "Please Enter Email";
  }elseif(empty($city)){
    $cityerr = "Please Enter City";
  }elseif(empty($phone)){
    $phoneerr = "Please Enter Phone";
  }elseif(empty($password)){
    $passworderr = "Please Enter Password";
  }else{
      header('Location:about.php');
  }

}



?>

<!-- End php section  -->

<!-- start form section  -->

<form class="border border-danger mr-5 ml-5 mt-5"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" >
   <h4 class="text-muted text-center mt-3"><?php  echo $allerr ?></h4>
<div class="container">
    <div class="row">
      <div class="col-md-12">
           <div class="form-row">
        
    <div class="col-md-6 mb-3 ">
      <label  class="mt-5"> Name :</label>
      <input type="text" class="form-control"  placeholder="Enter your name"  name="name">

       <p class="text-muted text-center"><?php echo $nameerr ?></p>

    </div>
    <div class="col-md-6 mb-3">
      <label  class="mt-5">Email :</label>
      <input type="email" class="form-control"  placeholder="Enter your email"  name="email">

      <p class="text-muted text-center"><?php echo $emailerr ?></p>

    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >City :</label>
      <input type="text" class="form-control"  placeholder="Enter your city" name="city">

       <p class="text-muted text-center"><?php echo $cityerr ?></p>

   </div>
      <div class="col-md-6 mb-3">
      <label>Phone :</label>
      <input type="text" class="form-control"  placeholder="Enter your phone" name="phone">

      <p class="text-muted text-center"><?php echo $phoneerr ?></p>

    </div>
  </div>
 <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >Password :</label>
      <input type="password" class="form-control" name="password">

       <p class="text-muted text-center"><?php echo $passworderr ?></p>

    </div>
   
  </div>

  </div>
  <button class="btn btn-danger mb-3 btn-block" type="submit">Submit form</button>

      </div>
    </div>
  </div>

</form>

<!-- End form section  -->







<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>