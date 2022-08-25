<button class="button is-success js-modal-trigger" data-target="modal-v-data">
    <span class="icon-text">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span>
            view description
        </span>
    </span>
  </button>
    <div class="modal" id="modal-add-data">
        <div class="modal-background"></div>
        <div class="modal-card">
            {{$slot}}
        </div>
    </div>