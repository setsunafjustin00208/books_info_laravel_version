
@if(session()->has('success'))
<div class="field icon-text mt-4 mb-4 has-text-danger">
        <span class="icon">
                <i class="fas fa-check-sq"></i>
        </span>
        <span>
                {{'success'}}
        </span>
</div>
@endif
@if(session()->has('error'))
<div class="field icon-text mt-4 mb-4 has-text-danger">
        <span class="icon">
                <i class="fas fa-exclamation-triangle"></i>
        </span>
        <span>
                {{'error'}}
        </span>
</div>
@endif


