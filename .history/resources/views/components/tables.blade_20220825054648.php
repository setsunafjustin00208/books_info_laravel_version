<div class="column box container">
    <script>
        $(document).ready(function () {
            $('#book').DataTable();
        });
    </script>
    <div class="table-container">
        <table class="table" id="book">
             {{$slot}}
          </table>
    </div>  

</div>