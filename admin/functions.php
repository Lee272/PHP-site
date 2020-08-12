<?php
function confirm($result){
  global $connection;
  if(!$result){
    echo "Query Failed";
    die("Query Failed ." . mysqli_error($connection));
  }
}

?>