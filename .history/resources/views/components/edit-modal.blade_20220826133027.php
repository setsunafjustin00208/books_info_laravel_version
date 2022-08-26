<div {{}}>
    <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Edit a book</p>
            <button class="delete" aria-label="close"></button>
        </header>
          <section class="modal-card-body">
            <form method="POST" action="/updatebook">
              @csrf
              <div class="container">
                <input type="hidden" name="id" value="{{$book->id}}">
                <div class="field">
                  <label class="label">Title</label>
                  <div class="control">
                    <input class="input" type="text" value="{{$book->book_name}}" name="book_name" min=5 max=150 required>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Author</label>
                  <div class="control">
                    <div class="select">
                        <select name="author" required>
                          @foreach($authors as $author)
                            <option value="{{$author->fname}}&nbsp;{{$author->mname}}&nbsp;{{$author->lname}}"><p class="mr-3">{{$author->fname}} {{$author->mname}} {{$author->lname}}</p></option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Description</label>
                  <div class="control">
                    <textarea style="resize: none;" class="textarea" rows=10 name="description" min=5 max=500 required>{{$book->description}}</textarea>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Publication Date and Time</label>
                  <div class="control">
                    <input class="input" type="datetime-local" value="{{$book->publication_date_n_time}}" name="publication_date_n_time" min=5 max=150 required>
                  </div>
                </div>
                <input type="hidden" name="date_updated" value="<?=date("Y-m-d")?>">
              </div>
          </section>
        <footer class="modal-card-foot">
            <button class="button is-success">
              <span class="icon-text">
                <span class="icon">
                  <i class="fas fa-floppy-disk"></i>
                </span>
                <span>
                  Update Book
                </span>
              </span>
            </button>
          </form>
          <button class="button">
            <span class="icon-text"><span class="icon">
              <i class="fas fa-ban"></i>
            </span>
            <span>Cancel</span>
        </button>
      </footer>
  </div>
</div>