<div class="col-md-4">

  <?php include "includes/search.php" ?>
  <!-- Blog Categories -->
  <div class="card bg-light p-3 m-2">
    <?php
      $query = "SELECT * FROM topics LIMIT 8";
      $select_topics_sidebar = mysqli_query($connection, $query);
    ?>
      <h4>Blog Categories</h4>
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled">
            <?php
              while($row = mysqli_fetch_assoc($select_topics_sidebar)){
                $topic_title = $row['topic_name'];
                
                echo "<li><a href='#'>$topic_title</a></li>";
              }
            ?>
          </ul>
        </div>
        <!-- End col-lg-6 -->
        <div class="col-lg-6">
          <ul class="list-unstyled">
            <li>
              <a href="#">$topic_title</a>
            </li>
            <li>
              <a href="#">Category Name</a>
            </li>
            <li>
              <a href="#">Category Name</a>
            </li>
            <li>
              <a href="#">Category Name</a>
            </li>
          </ul>
        </div>
        <!-- End col-lg-6 -->
      </div>
  </div>
  <!-- Side Widget -->
<?php include "includes/widget.php" ?>
</div>