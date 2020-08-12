<?php

  if(isset($_POST['remove_category'])){
    $cat_title = $_POST['cat_title'];
    
      if($cat_title == "" || empty($cat_title)){
        echo "Field cannot be Empty";
    } else {  
        if(is_numeric($cat_title)){
          $query = "DELETE FROM topics ";
          $query .= "WHERE topic_id='$cat_title'";

          $delete_topic_query = mysqli_query($connection, $query);

            if(!$delete_topic_query){
              die('Query Failed' . mysqli_error($connection));
            }
        } else {
          echo "Please use a Valid Id Number";
        }
      
    }
  }

?>
