<div {{$attributes->merge(['class' => 'modal', 'id' => ''])}}>
    <div class="modal-background"></div>
      <div class="modal-card">
            {{$slot}}
          <button class="button">
            <span class="icon-text"><span class="icon">
              <i class="fas fa-ban"></i>
            </span>
            <span>Cancel</span>
        </button>
      </footer>
  </div>
</div>