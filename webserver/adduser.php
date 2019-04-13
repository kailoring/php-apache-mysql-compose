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

  if(isset($_POST['submit'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $query = "INSERT INTO testtab(id, name) VALUES('$id','$name')";

    if(mysqli_query($conn, $query)){
      header('Location: '.$_SERVER['PHP_SELF']);
      die;
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
  }
 ?>

 <div>
 <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
   <div>
   <label>id</label>
   <input type="text" name="id">
   </div>
   <div>
     <label>name</label>
     <input type="text" name="name">
   </div>
   <input type="submit" name="submit" value="Submit">
 </form>
 </div><br>
 <form action="index.php" method="post">
 <input type="submit" value="Home">
 </form>
