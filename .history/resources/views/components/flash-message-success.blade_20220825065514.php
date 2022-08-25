
@if(session()->has('success'))
<div class='container box has-background-success-light animate__animated animate__fadeInUpBig'>
     
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


