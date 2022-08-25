
@if(session()->has('success'))

<div class='container box has-background-success-light animate__animated animate__fadeInUpBig'>
        <div class="field icon-text mt-4 mb-4 has-text-success">
                <span class="icon">
                        <i class="fas fa-check-square"></i>
                </span>
                <span>
                        {{session('success')}}
                </span>
        </div>
</div>
@endif
@if(session()->has('failed'))
<div class='container box has-background-success-light animate__animated animate__fadeInUpBig'>
        <div class="field icon-text mt-4 mb-4 has-text-danger">
                <span class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                </span>
                <span>
                        {{('')}}
                </span>
        </div>
</div>
@endif


