@props(['book'])

<div {{$attributes->merge(['class' => '', 'id' =>])}}</div>
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Delete Book?</p>
            <button class="delete" aria-label="close"></button>
        </header>
            <section class="modal-card-body">
              <form method="POST" action="/deletebook">
                @csrf
              <input type="hidden" name="id" value="{{$book->id}}">
                <p class="subtitle is-5"> 
                    Are you sure to delete this Book?
                </p>
            </section>
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
</div>