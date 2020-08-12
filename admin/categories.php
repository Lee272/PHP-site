<?php include "includes/admin_header.php" ?>
<div id="wrapper">
  <!-- Navigation -->
  <?php include "includes/admin_navigation.php" ?>
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome to the Admin Panel
            <small>Author</small>
          </h1>
          <div class="col-xs-6">
            <?php include "includes/add_categories.php" ?>
            <?php include "includes/remove_categories.php" ?>
            <form action="categories.php" method="post">
              <div class="form-group">
                <label for="cat_title">Add Category</label>
                <input type="text" name="cat_title" class="form-control" id="">
              </div>
              <div class="form-group">
                <input type="submit" name="add_category" value="Add Category" class="btn btn-primary" id="">
                <input type="submit" name="remove_category" value="Remove Category" class="btn btn-danger" id="" disabled>
              </div>
            </form>
            <?php 
              if(isset($_GET['update'])){
                $topic_id = $_GET['update'];
                
                include "includes/update_category_form.php";
              }
            ?>

          </div>
          <div class="col-xs-6">
            <?php include "includes/topic_table.php" ?>
            <?php
                  if(isset($_GET['delete'])){
                    $topic_link_id = $_GET['delete'];
                    
                    $query = "DELETE FROM topics ";
                    $query .= "WHERE topic_id='$topic_link_id'";
                    
                    $delete_topic_query = mysqli_query($connection, $query);
                    header("Location: categories.php");
                  }
                ?>
              </tbody>
              </table>

          </div>
        </div>
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