<?php
// DB Connection Method 1
// $connection = mysqli_connect('localhost', 'root', 'UymVMf7wY3Gu', 'cms');

// if($connection){
//   echo "Connection Established";
// } else {
//   echo "Connection Failed";
// }

// DB Connection Method 2
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "UymVMf7wY3Gu";
$db['db_name'] = "cms";

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if($connection){
//   echo "Connection Established";
// } else {
//   echo "Connection Failed";
// }

?>