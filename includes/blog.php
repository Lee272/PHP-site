  <?php 
  
    $query = "SELECT * FROM posts";
    $select_all_posts = mysqli_query($connection, $query);
  
    while($row = mysqli_fetch_assoc($select_all_posts)){
      $post_title = $row['post_title'];
      $post_author = $row['post_author'];
      $post_date = $row['post_date'];
      $post_content = $row['post_content'];
      $tags = $row['post_tags'];
      $post_comment_count = $row['post_comment_count'];
      $post_image = $row['post_image'];
      
   ?>

  <h4>
    <a href='#'><?php echo $post_title ?></a>
  </h4>
  <p class='lead'>
    By <a href='#'><?php echo $post_author ?></a>
  </p>
  <p>
    <span class='glyphicon glyphicon-time'></span> Posted on <?php echo $post_date ?>
  </p>
  <hr />
  <img class='img-fluid' src='<?php echo $post_image ?>' alt=''>
  <hr />
  <p><?php echo $post_content ?></p>
  <a href='#' class='btn btn-primary'>Read More<span>...</span></a>
  <hr />
  
  <?php } ?>