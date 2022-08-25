<div class="column box">
    <script>
        $(document).ready(function () {
            $('#book').DataTable();
        });
    </script>
    <div class="table-container c">
        <table class="table" id="book">
             {{$slot}}
          </table>
    </div>  

</div>