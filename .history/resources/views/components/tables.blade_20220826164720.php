    <script>
        $(document).ready(function () {
            $('#tab').DataTable();
        });
    </script>
    <div class="table-container">
        <table class="table" id="book">
             {{$slot}}
          </table>
    </div>  
