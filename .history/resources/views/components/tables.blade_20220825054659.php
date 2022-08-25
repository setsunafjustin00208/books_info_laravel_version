<div class="column box">
    <script>
        $(document).ready(function () {
            $('#book').DataTable();
        });
    </script>
    <div class="table-container conta">
        <table class="table" id="book">
             {{$slot}}
          </table>
    </div>  

</div>