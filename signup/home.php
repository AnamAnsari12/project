<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}

include("connect.php");
$query = "SELECT * FROM  regestration";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);
// echo implode($result);
// var_dump($result);

if ($total != 0) {
  // echo "table has record";
?>

  <h2 class="text-center mb-4">Displaying All Records</h2>
  <table class="table table-bordered table-striped mx-auto" style="width: 80%;">
    <thead>
      <tr>
        <th width="10%">ID</th>
        <th width="10%">First Name</th>
        <th width="10%">Last Name</th>
        <th width="10%">Username</th>
        <th width="20%">Email</th>
        <th width="10%">Password</th>
        <th width="10%">Number</th>
        <th width="20%">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td>" . $result['id'] . "</td>
        <td>" . $result['firstname'] . "</td>
        <td>" . $result['lastname'] . "</td>
        <td>" . $result['username'] . "</td>
        <td>" . $result['email'] . "</td>
        <td>" . $result['password'] . "</td>
        <td>" . $result['number'] . "</td>
        <td><a href='update.php?id=$result[id]' class='btn btn-warning'>Update</a><a href='delete.php?id=$result[id]' class='btn btn-danger' value='delete'>Delete</a></td>
        
        </tr>
        ";
      }

      ?>
    </tbody>
  </table>
<?php
} else {
  echo "Table has no records";
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    .container {
      display: flex;
      justify-content: flex-end;
      align-items: flex-start;
    }

    .container a {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .username {
      position: absolute;
      top: 20px;
      left: 20px;
    }
  </style>
</head>

<body>
  <h1>WELCOME TO OUR HOME PAGE</h1>

  <h2 class="username">Welcome, <?php echo $_SESSION['username'] ?></h2>
  <div class="container">
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </div>

</body>

</html>