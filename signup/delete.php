<?php
include("connect.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM regestration WHERE id = $id";
  $data = mysqli_query($con, $query);
  if ($data) {
    echo "<h2>Record deleted successfully</h2>";
?>
    <meta http-equiv="refresh" content="3; url = http://localhost/project/signup/home.php" />
<?php
  } else {
    echo "Failed to delete record";
  }
}
