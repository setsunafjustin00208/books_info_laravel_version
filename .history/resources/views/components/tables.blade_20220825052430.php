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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?=$bookrow->date_created?></td>
                        <td><?=$bookrow->date_updated?></td>
                        <td>
                            
                        </td>
                  </tr>
                 
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