<?php
$con = mysqli_connect("localhost","id17209902_hoa","6RqrIUG3A<w--5e7","id17209902_shoptmdt");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	  // Change character set to utf8
	mysqli_set_charset($con,"utf8");

	
?>