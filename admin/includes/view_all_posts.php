        <table class="table table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Author</th>
              <th>Title</th>
              <th>Category</th>
              <th>Status</th>
              <th>Image</th>
              <th>Tags</th>
              <th>Comments</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            
              <?php
                $query = "SELECT * FROM posts";
                $select_posts = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_posts)){
                  $post_id = $row['post_id'];
                  $post_author = $row['post_author'];
                  $post_Title = $row['post_title'];
                  $post_Category = $row['post_category'];
                  $post_Status = $row['post_status'];
                  $post_Image = $row['post_image'];
                  $post_Tags = $row['post_tags'];
                  $post_Comments = $row['post_comments'];
                  $post_Date = $row['post_date'];
                  
                  echo "
                    <tr>
                      <td>$post_id</td>
                      <td>$post_author</td>
                      <td>$post_Title</td>
                      <td>$post_Category</td>
                      <td>$post_Status</td>
                      <td><img src='../images/$post_Image' alt='images' class='img-responsive' width='100'></td>
                      <td>$post_Tags</td>
                      <td>$post_Comments</td>
                      <td>$post_Date</td>
                    </tr>";
                }
                
              ?>
              <th>Id</th>
              <th>Bob</th>
              <th>Framewoks</th>
              <th>Coding</th>
              <th>Disabled</th>
              <th>Image</th>
              <th>coding</th>
              <th>Comments</th>
              <th>Date</th>
            
          </tbody>
        </table>