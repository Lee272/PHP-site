<?php include "includes/header.php" ?>
<div id="wrapper">
  <!-- Navigation -->
  <?php include "includes/navigation.php" ?>
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
            <form action="" method="post">
              <div class="form-group">
                <label for="cat_title">Category Title</label>
                <input type="text" name="cat_title" class="form-control" id="">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Add Category" class="btn btn-primary" id="">
              </div>
            </form>
          </div>
          <div class="col-xs-6">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Category Title</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Warframe</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Dauntless</td>
                </tr>
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