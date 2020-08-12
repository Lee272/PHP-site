<?php
  $query = "SELECT * FROM topics";
  $select_topics_sidebar = mysqli_query($connection, $query);
?>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category Title</th>
        <th>Remove</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>

<?php //Find all Categories Query
  while($row = mysqli_fetch_assoc($select_topics_sidebar)){
    $topic_id = $row['topic_id'];
    $topic_title = $row['topic_name'];

    echo "
      <tr>
        <td>
          $topic_id
        </td>
        <td>
          $topic_title
        </td>
        <td>
          <a href='categories.php?delete={$topic_id}'>Delete</a>
        </td>
        <td>
          <a href='categories.php?update={$topic_id}'>Update</a>
        </td>
      </tr>";
  }
?>