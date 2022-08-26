<div <?php echo e($attributes->merge(['class' => 'modal', 'id' => ''])); ?>>
    <div class="modal-background"></div>
    <div class="modal-card">
        <?php echo e($slot); ?>

        <footer class="modal-card-foot">
              <button class="button is-danger">
                <span class="icon-text">
                  <span class="icon">
                    <i class="fas fa-check"></i>
                  </span>
                  <span>
                    Yes
                  </span>
                </span>
              </button>
            </form>
            <button class="button is-success">
              <span class="icon-text"><span class="icon">
                <i class="fas fa-xmark"></i>
              </span>
              <span>No</span>
          </button>
        </footer>
    </div>
</div><?php /**PATH C:\xampp\htdocs\book_info\resources\views/components/delete-modal.blade.php ENDPATH**/ ?>