<x-layout>
    <x-navbar-users />
        <x-hero>
            <p class="title">
                <span class="icon-text">
                    <span class="icon"><i class="fas fa-book-bookmark"></i></span>
                    <span>Manage Books</span>
                </span>
            </p>
            <p class="subtitle">
                Add a new, edit or delete an existing books' information
            </p>
        </x-hero>
        <x-page-layout>
            <div class="column is-2 ml-4 has-background-light">
                <aside class="menu">
                    <p class="menu-label">
                      Menu
                    </p>
                    <ul class="menu-list">
                      <li>
                        <a href="/appview/books" class="is-active"><span class="icon-text">
                          <span class="icon is-medium">
                            <i class="fas fa-book-journal-whills fa-2x"></i>
                          </span>
                          <span class="">
                            Books
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="/appview/authors" class=""><span class="icon-text">
                          <span class="icon is-medium">
                            <i class="fas fa-book-open-reader fa-2x"></i>
                          </span>
                          <span>
                            Authors
                          </span>
                        </a>
                      </li>
                    </ul>
                  </aside>
                </div>
                <div class="column box">
                  <x-flash-message />
                    <x-modal-scripts />
                    <x-add-modal>
                        <header class="modal-card-head">
                            <p class="modal-card-title">Add a new book</p>
                            <button class="delete" aria-label="close"></button>
                        </header>
                            <section class="modal-card-body">
                              <form method="POST" action="/addbook">
                                @csrf
                                <div class="container">
                                  <div class="field">
                                    <label class="label">Title</label>
                                    <div class="control">
                                      <input class="input" type="text" placeholder="Enter the title" name="book_name" min=5 max=150 required>
                                    </div>
                                    @error('book_name')
                                      <label class="label mb-2 mt-2">{{$message}}</label>
                                    @enderror
                                  </div>
                                  <div class="field">
                                    <label class="label">Author</label>
                                    <div class="control">
                                      <div class="select">
                                          <select name="author">
                                            @foreach($authors as $author)
                                              <option value="{{$author->fname}}&nbsp;{{$author->mname}}&nbsp;{{$author->lname}}"><p class="mr-3">{{$author->fname}} {{$author->mname}} {{$author->lname}}</p></option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </div>
                                    @error('author')
                                    <label class="label mb-2 mt-2">{{$message}}</label>
                                  @enderror
                                  </div>
                                  <div class="field">
                                    <label class="label">Description</label>
                                    <div class="control">
                                      <textarea style="resize: none;" class="textarea" placeholder="Enter book Information" rows=10 name="description" min=5 max=500 required></textarea>
                                    </div>
                                    @error('description')
                                      <label class="label mb-2 mt-2">{{$message}}</label>
                                   @enderror
                                  </div>
                                  <div class="field">
                                    <label class="label">Publication Date and Time</label>
                                    <div class="control">
                                      <input class="input" type="datetime-local" name="publication_date_n_time" min=5 max=150 required>
                                    </div>
                                    @error('publication_date_n_time')
                                      <label class="label mb-2 mt-2">{{$message}}</label>
                                    @enderror
                                  </div>
                                  <input type="hidden" name="created_at" value="{{date("Y-m-d")}}">
                                  <input type="hidden" name="updated_at" value="{{date("Y-m-d")}}">
                                </div>
                            </section>
                        <footer class="modal-card-foot">
                              <button class="button is-success">
                                <span class="icon-text">
                                  <span class="icon">
                                    <i class="fas fa-floppy-disk"></i>
                                  </span>
                                  <span>
                                    Save Book
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
                        </x-add-modal>
                    <x-tables>

                        <thead>
                            <tr>
                                <th>Book ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Publication Date and Time</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            </tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->book_name}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->description}}</td>
                                <td>{{$book->publication_date_n_time}}</td>
                                <td>{{$book->created_at}}</td>
                                <td>{{$book->updated_at}}</td>
                                <td>
                                  <div class="buttons">
                                    <button class="button is-warning js-modal-trigger" data-target="modal-edit-book{{$book->id}}">
                                      <span class="icon-text">
                                          <span class="icon">
                                              <i class="fas fa-pen-to-square"></i>
                                          </span>
                                          <span>
                                              Edit book
                                          </span>
                                      </span>
                                    </button>
                                    <button class="button is-danger js-modal-trigger" data-target="modal-delete-author{{$book->id}}">
                                      <span class="icon-text">
                                          <span class="icon">
                                              <i class="fas fa-trash-can"></i>
                                          </span>
                                          <span>
                                              Delete Book
                                          </span>
                                      </span>
                                    </button>
                                    <div class="modal" id="modal-delete-author{{$book->id}}">
                                      <div class="modal-background"></div>
                                      <div class="modal-card">
                                          <header class="modal-card-head">
                                              <p class="modal-card-title">Delete Book?</p>
                                              <button class="delete" aria-label="close"></button>
                                          </header>
                                              <section class="modal-card-body">
                                                <form>
                                                <?=validation_errors()?>
                                                <input type="hidden" name="book_id" value="">
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
                                  </div>
    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                            <tfoot>
                                <tr>
                                  <th>Book ID</th>
                                  <th>Title</th>
                                  <th>Author</th>
                                  <th>Description</th>
                                  <th>Publication Date and Time</th>
                                  <th>Date Created</th>
                                  <th>Date Updated</th>
                                  <th>Action</th>
                                </tr>
                            </tfoot>
                    </x-tables>
                </div>
        </x-page-layout>
</x-layout>