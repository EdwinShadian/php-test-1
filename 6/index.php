<?php

$hostname = 'localhost';
$username = 'root';
$password = '123';
$database = 'data';

$conn = mysqli_connect($hostname, $username, $password, $database);

$sql = "SELECT * FROM users";
$resultSet = mysqli_query($conn, $sql);

$sql = "DELETE FROM users WHERE id >= 1 AND id <= 5";
$resultSet = mysqli_query($conn, $sql);
