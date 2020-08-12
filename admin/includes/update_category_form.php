<form action="" method="post">
  <div class="form-group">
    <label for="cat_title">Update Category</label>
    <?php //GET = ID
                  if(isset($_GET['update'])){
                    $topic_link_id = $_GET['update'];
                    
                    $query = "SELECT * FROM topics ";
                    $query .= "WHERE topic_id = {$topic_link_id}";
                    
                    $update_topic_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($update_topic_query)){
                      $topic_id = $row['topic_id'];
                      $topic_title = $row['topic_name'];
                    
                   ?> <input type="text" name="cat_title" class="form-control" value="<?php if(isset($topic_title)){echo $topic_title;} ?>">
    <?php } 
                   
               } ?>
  <?php include "includes/update_category.php" ?>
  </div>
  <div class="form-group">
    <input type="submit" name="update_category" value="Update Category" class="btn btn-primary" id="">
  </div>
</form>

