<?php
$_servername = 'localhost';
$username = 'root';
$password = '';
$database_name = 'student';

$conn = mysqli_connect($_servername,$username,$database_name);

if($conn){
    die('Connection failed',mysqli_connect_error());
}
