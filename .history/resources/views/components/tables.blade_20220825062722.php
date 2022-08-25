@props(['author'])


    <script>
        $(document).ready(function () {
            $('#book').DataTable();
        });
    </script>
    <div class="table-container container">
        <table class="table" id="book">
             {{$slot}}
          </table>
    </div>  

</div>