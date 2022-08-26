<div <?php echo e($attributes->merge(['class' => 'modal', 'id' => ''])); ?>>
    <div class="modal-background"></div>
      <div class="modal-card">
            <?php echo e($slot); ?>

          <button class="button">
            <span class="icon-text"><span class="icon">
              <i class="fas fa-ban"></i>
            </span>
            <span>Cancel</span>
        </button>
      </footer>
  </div>
</div><?php /**PATH C:\xampp\htdocs\book_info\resources\views/components/edit-modal.blade.php ENDPATH**/ ?>