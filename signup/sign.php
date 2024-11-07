<?php
 $succses=0;
 $user=0;
if($_SERVER['REQUEST_METHOD'] =='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST ['password'];
    $firstname=$_POST ['firstname'];
    $lastname=$_POST ['lastname'];
    $number=$_POST['number'];
    $email=$_POST['email'];

    // $sql="insert into `regestration`(username,password) values('$username','$password')";
    // $result=mysqli_query($con,$sql);
    // if($result){
    //     echo "Data inserted succesfully";
    // }
    // else{
    //     die(mysqli_error($con));
    //     }

   
    $sql="select * from `regestration` where username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            // echo "User Alredy Exist";
            $user=1;
        }
        else{
            $sql="insert into `regestration`(username,password,firstname,lastname,email,number) values('$username','$password','$firstname','$lastname','$email','$number')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted succesfully";
        $succses=1;
        header('location:login.php');
    }
    else{
            die(mysqli_error($con));
            }
    
        }
    }
}



?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="./index.js" defer></script>
  </head>
  <body>

  <?php
  
  if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>ohh no sorrry </strong> User alredy exist.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  
  ?>

  <!-- for sucsess -->

  <?php
  
  if($succses){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> you are succesfully sign up
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  
  ?>
    <div class="container mt-5" >
    <h1 class="text-center">Welcome Sign Up Form</h1>
    <form action="sign.php" method="post" class="row g-3" id="formSubmit">
  <div class="mb-3 col-md-6">
    <label for="exampleInputName1" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputName1"placeholder="Enter your First Name" name="firstname" minlength="3" maxlength="15" pattern="^[A-Za-z]+$" required>
   
  </div>
  <div class="mb-3 col-md-6">
    <label for="exampleInputLastName" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter your Last Name" name="lastname" minlength="3" maxlength="15" pattern="^[A-Za-z]+$" required>
   
  </div>
  <div class="mb-3 col-md-6 ">
    <label for="exampleInputUserName" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputUserName"placeholder="Enter your user Name" name="username"  minlength="3" maxlength="15" required>
   
  </div>
  <div class="mb-3 col-md-6">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email" name="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[Cc][Oo][Mm]$
">
   
  </div>
  
  

  <div class="mb-3 col-md-6">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password" name="password" minlength="8" required>
  </div>

  <div class="mb-3 col-md-6">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" name="confirm password" minlength="8" required>
  </div>
 
  
  <div class="mb-3 col-md-6">
    <label for="exampleInputNumber" class="form-label">Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" placeholder="Enter your Number" name="number"required min="1000000000" max="9999999999">
   
  </div>
  
  
  <button type="submit" class="btn btn-primary w-100 col-md-6 " >Submit</button>
</form>

<div id="show" style="display:none"> 
<h3>password do not match !!</h3>
</div>
    </div>


  
  </body>
</html>