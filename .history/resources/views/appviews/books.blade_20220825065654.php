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
                    <x-modal-scripts />
                    <x-add-modal>
                        <header class="modal-card-head">
                            <p class="modal-card-title">Add a new book</p>
                            <button class="delete" aria-label="close"></button>
                        </header>
                            <section class="modal-card-body">
                              <form method="POST" action='/addbook'>
                                <div class="container">
                                  <div class="field">
                                    <label class="label">Title</label>
                                    <div class="control">
                                      <input class="input" type="text" placeholder="Enter the title" name="name" min=5 max=150 required>
                                    </div>
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
                                  </div>
                                  <div class="field">
                                    <label class="label">Description</label>
                                    <div class="control">
                                      <textarea style="resize: none;" class="textarea" placeholder="Enter book Information" rows=10 name="description" min=5 max=500 required></textarea>
                                    </div>
                                  </div>
                                  <div class="field">
                                    <label class="label">Publication Date and Time</label>
                                    <div class="control">
                                      <input class="input" type="datetime-local" name="publication_date_n_time" min=5 max=150 required>
                                    </div>
                                  </div>
                                  <input type="hidden" name="created_at" value="<?=date("Y-m-d")?>">
                                  <input type="hidden" name="updated_at" value="<?=date("Y-m-d")?>">
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
                        <x
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
                                <td><x-view-modal>{{$book->description}}</x-view-modal></td>
                                <td>{{$book->publication_date_n_time}}</td>
                                <td>{{$book->created_at}}</td>
                                <td>{{$book->updated_at}}</td>
                                <td>
    
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