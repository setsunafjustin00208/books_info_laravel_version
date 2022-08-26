    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
    <div class="table-container">
        <table class="table" id="table">
             {{$slot}}
          </table>
    </div>  
