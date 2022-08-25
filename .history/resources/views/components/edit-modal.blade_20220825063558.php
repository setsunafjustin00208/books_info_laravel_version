<button class="button is-success js-modal-trigger" data-target="modal-add-data">
    <span class="icon-text">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span>
            Add Book
        </span>
    </span>
  </button>
    <div class="modal" id="modal-ed-data">
        <div class="modal-background"></div>
        <div class="modal-card">
            {{$slot}}
        </div>
    </div>