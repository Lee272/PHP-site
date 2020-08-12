<?php include "includes/admin_header.php" ?>
<div id="wrapper">
  <!-- Navigation -->
  <?php include "includes/admin_navigation.php" ?>
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <h1 class="page-header">
          Welcome to the Admin Panel
          <small>Author</small>
        </h1>
        <?php
          if(isset($_GET['source'])){
            $source = $_GET['source'];
            
          } else {
            $source = '';
          }

        switch($source){
            case 'add_post';
              include "includes/add_post.php";
            break;
            case '36';
            echo "Average";
            break;
            case '58';
            echo "Bad";
            break;
            
          default:
            include "includes/view_all_posts.php";
            break;
        }
  
  
  
        ?>


      </div>

      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/ec4f65a4eb.js" crossorigin="anonymous"></script>
</body>

</html>