<?php
include("connect.php");

// Check if the 'id' is set in the URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Query to fetch user data by id
  $query = "SELECT * FROM regestration WHERE id='$id'";
  $data = mysqli_query($con, $query);

  if ($data && mysqli_num_rows($data) > 0) {
    $result = mysqli_fetch_assoc($data);
  } else {
    echo "No record found with this ID.";
    exit(); // Stop the script if no record is found
  }
} else {
  echo "ID not provided in the URL.";
  exit(); // Stop the script if 'id' is not in the URL
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

  <div class="container mt-5">
    <h1 class="text-center">Update Record</h1>
    <form action="update.php?id=<?php echo $id; ?>" method="post" class="row g-3" id="formSubmit">
      <div class="mb-3 col-md-6">
        <label for="exampleInputName1" class="form-label">First Name</label>
        <input type="text" value="<?php echo $result['firstname']; ?>"
          class="form-control" id="exampleInputName1" placeholder="Enter your First Name" name="firstname" minlength="3" maxlength="15" pattern="^[A-Za-z]+$" required>

      </div>
      <div class="mb-3 col-md-6">
        <label for="exampleInputLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $result['lastname']; ?>"
          id="exampleInputLastName" placeholder="Enter your Last Name" name="lastname" minlength="3" maxlength="15" pattern="^[A-Za-z]+$" required>

      </div>
      <div class="mb-3 col-md-6 ">
        <label for="exampleInputUserName" class="form-label">User Name</label>
        <input type="text" class="form-control"
          value="<?php echo $result['username']; ?>"
          id="exampleInputUserName" placeholder="Enter your user Name" name="username" minlength="3" maxlength="15" required>

      </div>
      <div class="mb-3 col-md-6">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control"
          value="<?php echo $result['email']; ?>"
          id="exampleInputEmail1" placeholder="Enter your Email" name="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[Cc][Oo][Mm]$
">

      </div>



      <div class="mb-3 col-md-6">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control"
          value="<?php echo $result['password']; ?>"
          id="exampleInputPassword1" placeholder="Enter Your Password" name="password" minlength="8" required>
      </div>

      <div class="mb-3 col-md-6">
        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control"

          id="exampleInputPassword2" placeholder="Confirm Password" name="confirm password" minlength="8" required>
      </div>


      <div class="mb-3 col-md-6">
        <label for="exampleInputNumber" class="form-label">Number</label>
        <input type="number" class="form-control"
          value="<?php echo $result['number']; ?>"
          id="exampleInputNumber" placeholder="Enter your Number" name="number" required min="1000000000" max="9999999999">

      </div>


      <button type="submit" class="btn btn-primary w-100 col-md-6 " name="update">update</button>
    </form>

    <div id="show" style="display:none">
      <h3>password do not match !!</h3>
    </div>
  </div>



</body>

</html>



<?php
include("connect.php");

$id = $_GET['id']; // Get the id from URL

if (isset($_POST['update'])) {  // Check if 'update' button is clicked
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $number = $_POST['number'];
  $email = $_POST['email'];

  // Update query
  $query = "UPDATE regestration SET 
              username='$username',
              firstname='$firstname',
              lastname='$lastname',
              email='$email',
              password='$password',
              number='$number' 
              WHERE id='$id'";

  $data = mysqli_query($con, $query);

  if ($data) {
    echo "Data updated successfully";
?>
    <meta http-equiv="refresh" content="3; url = http://localhost/project/signup/home.php" />
<?php
  } else {
    echo "Failed to update data";
  }
}
?>