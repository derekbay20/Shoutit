<?php

//connect to mysql
$conn = mysqli_connect("localhost", "root", "", "shoutit");

//test connection
if (mysqli_connect_errno()) {
	die('failed to connect to Mysqli: '.mysqli_connect_error());
}