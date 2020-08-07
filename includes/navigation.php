<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <!-- Collapsed Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <?php
            $query = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($connection, $query);
          
            while($row = mysqli_fetch_assoc($select_all_categories)){
              $cat_title = $row['cat_title'];
              $cat_link = $row['cat_link'];
              echo "<li class='nav-item'><a class='nav-link' href='$cat_link'>$cat_title</a></li>";
            }
          ?>
          <li class='nav-item'><a class='nav-link' href='admin'>Administrator</a></li>
        </ul>
      </div>
    </div>
  </nav>