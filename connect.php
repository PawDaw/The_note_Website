<?php

$user = 'root';
$password = 'root';
$db = 'note';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

if (! $success) {
            die('Could not connect: ' . mysql_error());
        }
        else {
           // echo "connected";
        }

?>

