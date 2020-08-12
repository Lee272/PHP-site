<?php include "includes/db.php" ?>
<?php include "admin/functions.php" ?>
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
      <!-- First Blog -->
      <?php include "includes/blog.php" ?>
      <!-- Pager -->
      <?php include "includes/pager.php" ?>
    </div>
    <!-- Blog Navigation - Sidebar -->
    <?php include "includes/sidebar.php" ?>
    <!-- End Sidebar - Categories -->
  </div>
</div>
<?php include "includes/footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ec4f65a4eb.js" crossorigin="anonymous"></script>
</body>

</html>