<?php
$servername = "db";
$username = "csci459";
$password = "csci459";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Query
$query = "SELECT id, name FROM testtab";
// Get Result
$result = mysqli_query($conn, $query);
// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Free Result
mysqli_free_result($result);

// Check For Submit
if(isset($_POST['delete'])){
  // Get form data
  $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

  $query = "DELETE FROM testtab WHERE id = {$delete_id}";

  if(mysqli_query($conn, $query)){
    header('Location: '.$_SERVER['PHP_SELF']);
    die;
  } else {
    echo 'ERROR: '. mysqli_error($conn);
  }
}


?>

<h1>Users</h1>
<?php foreach($users as $user) : ?>
  <p>ID: <?php echo $user['id']; ?> - Name: <?php echo $user['name']; ?> -
  <a href="<?php echo ROOT_URL; ?>edituser.php?id=<?php echo $user['id']; ?>">Edit User</a>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="delete_id" value="<?php echo $user['id']; ?>">
    <input type="submit" name="delete" value="Delete">
  </p>
  </form>
<?php endforeach; ?><br>
<form action="adduser.php" method="post">
<input type="submit" value="Add User">
</form>
