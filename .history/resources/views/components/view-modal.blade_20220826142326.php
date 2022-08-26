    <div class="modal" id="modal-view-data" {{$attributes->merge->(['class' => 'modal', id])}}>
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Description</p>
                <button class="delete" aria-label="close"></button>
            </header>    
            <section class="modal-card-body">
                {{$slot}}
            </section>
        </div>
    </div>