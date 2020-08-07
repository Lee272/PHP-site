<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<!-- Navigation Bar -->
<?php include "includes/navigation.php" ?>
<!-- Column Layout -->
<div class="container">
  <div class="row">
    <!-- Blog Data -->
    <div class="col-md-8">
      <!-- Heading -->
      <?php include "includes/heading.php" ?>
      <!-- Filtered Blog -->
  <?php 
    include "includes/searchquery.php";
    while($row = mysqli_fetch_assoc($search_query)){
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
      <!-- Pager -->

    </div>
    <!-- Blog Navigation - Sidebar -->
    <?php include "includes/sidebar.php" ?>
    <!-- End Sidebar - Categories -->
  </div>
</div>
<?php include "includes/footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>