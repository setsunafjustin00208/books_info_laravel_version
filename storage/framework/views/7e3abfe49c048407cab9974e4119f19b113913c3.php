    <div <?php echo e($attributes->merge(['class' => 'modal', 'id' => ''])); ?>>
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Description</p>
                <button class="delete" aria-label="close"></button>
            </header>    
            <section class="modal-card-body">
                <?php echo e($slot); ?>

            </section>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\book_info\resources\views/components/view-modal.blade.php ENDPATH**/ ?>