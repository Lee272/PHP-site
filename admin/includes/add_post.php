<?php
 
  if(isset($_POST['create_post'])){
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_category_id'];
    $post_status = $_POST['post_status'];
    
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['temp_name'];
    
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    
    $post_comment_count = 4;

      move_uploaded_file($post_image_temp, "../images/$post_image");
      
    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
    $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(), '{$post_image}', ";
    $query .= "'{$post_content}', '{$post_tags}', {$post_comment_count}, '{$post_status}' ) ";
    $add_post_query = mysqli_query($connection, $query);
    confirm($add_post_query);
    
  }

?>

  <form action="include/add_post.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="post_title" class="form-label">Post title</label>
      <input type="text" class="form-control" id="" name="post_title">
    </div>
    <div class="form-group">
      <label for="post_category_id" class="form-label">Post Category Id</label>
      <input type="text" class="form-control" id="" name="post_category_id">
    </div>
    <div class="form-group">
      <label for="post_author" class="form-label">Post Author</label>
      <input type="text" class="form-control" id="" name="post_author">
    </div>
    <div class="form-group">
      <label for="post_status" class="form-label">Post Status</label>
      <input type="text" class="form-control" id="" name="post_status">
    </div>
    <div class="form-group">
      <label for="post_image" class="form-label">Post Image</label>
      <input type="file" class="" id="" name="image">
    </div>
    <div class="form-group">
      <label for="post_tags" class="form-label">Post Tags</label>
      <input type="text" class="form-control" id="" name="post_tags">
    </div>
    <div class="form-group">
      <label for="post_content" class="form-label">Post Content</label>
      <textarea class="form-control" name="post_content"></textarea>
    </div>
    <div class="form-group">
      <label for="post_date" class="form-label">Date</label>
      <input type="date" class="form-control" id="" name="post_date">
    </div>
    <input type="submit" value="Submit" name="create_post" class="btn btn-primary form-group">
  </form>
