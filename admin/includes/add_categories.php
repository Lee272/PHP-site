<?php

  if(isset($_POST['add_category'])){
    $cat_title = $_POST['cat_title'];

    if($cat_title == "" || empty($cat_title)){
      echo "Field cannot be Empty";
    } 
    else {
      $query = "INSERT INTO topics(topic_name) ";
      $query .= "VALUE('{$cat_title}')";

      $create_topic_query = mysqli_query($connection, $query);

      if(!$create_topic_query){
        die('Query Failed' . mysqli_error($connection));
      }
    }
  }
  
?>