<script>
    $(document).ready(function () {
        $('#book').DataTable();
    });
  </script>
    <div class="table-container">
        <table class="table" id="book">
              <thead>
                  <tr>
            <th>Book ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Publication Date and Time</th>
            <th>Date Created</th>
            <th>Date Updated</th>
            <th>Action</th>
                  </tr>
                              
              </thead>
              <tbody>
                  <tr>		
              <td><?=$bookrow->book_id?></td>
              <td><?=$bookrow->name?></td>
              <td><?=$bookrow->author?></td>
              <td><?=$bookrow->description?></td>
              <td><?=$bookrow->publication_date_n_time?></td>
              <td><?=$bookrow->date_created?></td>
              <td><?=$bookrow->date_updated?></td>
              <td>
                
              </td>
                  </tr>
                  <?php
                      }
                  ?>
              </tbody>
                  <tfoot>
                      <tr>
                        <th>Book ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Publication Date and Time</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
          </table>
    </div>  