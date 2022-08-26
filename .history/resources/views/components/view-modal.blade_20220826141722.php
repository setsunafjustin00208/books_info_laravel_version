<button class="button is-success js-modal-trigger" data-target="modal-view-data" {{}}>
    <span class="icon-text">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span>
           View
        </span>
    </span>
  </button>
    <div class="modal" id="modal-view-data">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Book Description</p>
                <button class="delete" aria-label="close"></button>
            </header>    
            <section class="modal-card-body">
                {{$slot}}
            </section>
        </div>
    </div>