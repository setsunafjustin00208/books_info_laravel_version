
@if(session()->has('message'))

<div class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
    {{session('message')}}
</div>

@endif 

<div class="field icon-text mt-4 mb-4 has-text-danger">
        <span class="icon">
                <i class="fas fa-exclamation-triangle"></i></span>
                                                    <span>
                                                            <?php echo $validation ?>
                                                    </span>
                                </div>