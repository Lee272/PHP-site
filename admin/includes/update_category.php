<?php

  if(isset($_POST)){
    $update_category_title = $_POST['cat_title'];
    $query = "UPDATE topics SET topic_name = '{$update_category_title}' WHERE topic_id = {$topic_id} ";
  
    $updated_topic_query = mysqli_query($connection, $query);
      if(!$updated_topic_query){
        die("Query Failed" . mysqli_error($connection));
      }
  }


?>

