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
  // Check for submit
  if(isset($_POST['submit'])){
    // Get form data
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $query = "UPDATE testtab SET
					id='$id',
					name='$name'
					WHERE id = {$update_id}";

    if(mysqli_query($conn, $query)){
      header('Location: '.$_SERVER['PHP_SELF']);
      die;
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
  }

  // get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM testtab WHERE id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$user = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	//mysqli_free_result($user);

	// Close Connection
	mysqli_close($conn);
 ?>

 <div>
 <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
   <div>
   <label>id</label>
   <input type="text" name="id" value="<?php echo $user['id']; ?>">
   </div>
   <div>
     <label>name</label>
     <input type="text" name="name" value="<?php echo $user['name']; ?>">
   </div>
   <input type="hidden" name="update_id" value="<?php echo $user['id']; ?>">
   <input type="submit" name="submit" value="Submit">
 </form>
 </div><br>
 <form action="index.php" method="post">
 <input type="submit" value="Home">
 </form>
