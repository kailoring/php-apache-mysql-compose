<?php
	// Create Connection
	$conn = mysqli_connect(servername, username, password, dbname);

	// Check Connection
  if ($conn->connect_error) {
    //Connection failed
      die("Connection failed: " . $conn->connect_error);
  }
