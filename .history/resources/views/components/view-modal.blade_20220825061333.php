<button class="button is-success js-modal-trigger" data-target="modal-view-data">
    <span class="icon-text">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span>
           Vie
        </span>
    </span>
  </button>
    <div class="modal" id="modal-view-data">
        <div class="modal-background"></div>
        <div class="modal-card">
            {{$slot}}
        </div>
    </div>