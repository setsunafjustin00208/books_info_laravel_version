
<?php if(session()->has('success')): ?>

<div class='container box has-background-success-light animate__animated animate__fadeInUpBig'>
        <div class="field icon-text mt-4 mb-4 has-text-success">
                <span class="icon">
                        <i class="fas fa-check-square"></i>
                </span>
                <span>
                    
                        <?php echo e(session('remember_token')); ?>

                </span>
        </div>
</div>
<?php endif; ?>
<?php if(session()->has('failed')): ?>
<div class='container box has-background-success-light animate__animated animate__fadeInUpBig'>
        <div class="field icon-text mt-4 mb-4 has-text-danger">
                <span class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                </span>
                <span>
                        <?php echo e(session('failed')); ?>

                </span>
        </div>
</div>
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\book_info\resources\views/components/flash-message.blade.php ENDPATH**/ ?>