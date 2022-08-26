    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
    <div class="table-container">
        <table class="table" id="boo">
             {{$slot}}
          </table>
    </div>  
