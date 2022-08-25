@props(['authors'])

<div class="column box">
        <script>
            document.addEventListener('DOMContentLoaded', () => {

            function openModal($el) {
                $el.classList.add('is-active');
            }

            function closeModal($el) {
                $el.classList.remove('is-active');
            }

            function closeAllModals() {
                (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                    closeModal($modal);
                });
            }

            (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
                const modal = $trigger.dataset.target;
                const $target = document.getElementById(modal);

                $trigger.addEventListener('click', () => {
                    openModal($target);
                });
            });

            (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
                const $target = $close.closest('.modal');

                $close.addEventListener('click', () => {
                    closeModal($target);
                });
            });

        
            document.addEventListener('keydown', (event) => {
                const e = event || window.event;

                if (e.keyCode === 27) {
                    closeAllModals();
                }
            });
        });
    </script>
    <x-add-modal>
        <header class="modal-card-head">
            <p class="modal-card-title">Add a new book</p>
            <button class="delete" aria-label="close"></button>
        </header>
            <section class="modal-card-body">
                $
            <button class="button">
              <span class="icon-text"><span class="icon">
                <i class="fas fa-ban"></i>
              </span>
              <span>Cancel</span>
          </button>
        </footer>
    </x-add-modal>

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