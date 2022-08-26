    <script>
        $(document).ready(function () {
            $('#book').DataTable();
        });
    </script>
    <div class="table-container contain">
        <table class="table" id="book">
             {{$slot}}
          </table>
    </div>  
