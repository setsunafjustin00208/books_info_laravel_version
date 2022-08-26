@php
  $logged_in = session('logged_in');
  if(!$logged_in){
    header('Location: '.URL::to('/'));
    exit();
  }
 
@endphp
<x-layout>
    <x-navbar />
        <x-hero>
            <p class="title">
                <span class="icon-text">
                    <span class="icon"><i class="fas fas fa-user-pen"></i></span>
                    &nbsp;
                    <span>Manage Authors</span>
                </span>
        </p>
        <p class="subtitle">
          Add a new, edit or delete an existing Author's information
        </p>
        </x-hero>
        <x-page-layout>
          <x-sidebar>
            <li>
              <a href="/appview/books" class=""><span class="icon-text">
                <span class="icon is-medium">
                  <i class="fas fa-book-journal-whills fa-2x"></i>
                </span>
                <span class="">
                  Books
                </span>
              </a>
            </li>
            <li>
              <a href="/appview/authors" class="is-active"><span class="icon-text">
                <span class="icon is-medium">
                  <i class="fas fa-book-open-reader fa-2x"></i>
                </span>
                <span>
                  Authors
                </span>
              </a>
            </li>
          </x-sidebar>
                <div class="column box">
                  <x-flash-message />
                    <x-modal-scripts />
                    <x-add-modal>
                        <header class="modal-card-head">
                            <p class="modal-card-title">Add a new Author</p>
                            <button class="delete" aria-label="close"></button>
                        </header>
                            <section class="modal-card-body">
                              <form method="POST" action="/addauthor">
                                @csrf
                                <div class="container">
                                    <div class="field">
                                      <label class="label">First name</label>
                                      <div class="control">
                                        <input class="input" type="text" placeholder="Enter First name" name="fname" min=5 max=150>
                                      </div>
                                      @error('fname')
                                      <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                    @enderror
                                    </div>
                                    <div class="field">
                                      <label class="label">Last name</label>
                                      <div class="control">
                                        <input class="input" type="text" placeholder="Enter Last name" name="lname" min=5 max=50>
                                      </div>
                                      @error('lname')
                                      <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                    @enderror
                                    </div>
                                    <div class="field">
                                      <label class="label">Middle name</label>
                                      <div class="control">
                                        <input class="input" type="text" placeholder="Enter Middle name" name="mname" min=5 max=50>
                                      </div>
                                      @error('mname')
                                      <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                    @enderror
                                    </div>
                                    <div class="field">
                                      <label class="label">Author Information</label>
                                      <div class="control">
                                        <textarea style="resize: none;" class="textarea" placeholder="Enter Author Information" rows=10 name="description" min=5 max=500></textarea>
                                      </div>
                                      @error('description')
                                      <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                    @enderror
                                    </div>
                                    <input type="hidden" name="created_at" value="<?=date("Y-m-d H:i:s")?>">
                                    <input type="hidden" name="updated_at" value="<?=date("Y-m-d H:i:s")?>">
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
                                <th>Author ID</th>
                                <th>First name</th>
                                <th>Last Name</th>
                                <th>Middle name</th>
                                <th>Description</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($authors as $author)
                            </tr>
                                <td>{{$author->id}}</td>
                                <td>{{$author->fname}}</td>
                                <td>{{$author->lname}}</td>
                                <td>{{$author->mname}}</td>
                                <td>
                  
                                  <button class="button is-small is-success js-modal-trigger" data-target="modal-view-data{{$book->id}}">
                                    <span class="icon-text">
                                        <span class="icon">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span>
                                           View
                                        </span>
                                    </span>
                                  </button>
                                  <x-view-modal id="modal-view-data{{$book->id}}">
                                    {{$book->description}}
                                  </x-view-modal>
                                </td>
                                <td>{{$author->created_at}}</td>
                                <td>{{$author->updated_at}}</td>
                                <td>
                                  <div class="buttons">
                                    <button class="button is-warning js-modal-trigger" data-target="modal-edit-author{{$author->id}}">
                                      <span class="icon-text">
                                          <span class="icon">
                                              <i class="fas fa-pen-to-square"></i>
                                          </span>
                                      </span>
                                    </button>
                                  <x-edit-modal id="modal-edit-author{{$author->id}}">
                                    <header class="modal-card-head">
                                      <p class="modal-card-title">Add a new Author</p>
                                      <button class="delete" aria-label="close"></button>
                                    </header>
                                      <section class="modal-card-body">
                                        <form method="POST" action="/updateauthor">
                                          @csrf
                                          <input type="hidden" name="id" value="{{$author->id}}">
                                          <div class="container">
                                              <div class="field">
                                                <label class="label">First name</label>
                                                <div class="control">
                                                  <input class="input" type="text" value="{{$author->fname}}" name="fname" min=5 max=150>
                                                </div>
                                                @error('fname')
                                                <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                              @enderror
                                              </div>
                                              <div class="field">
                                                <label class="label">Last name</label>
                                                <div class="control">
                                                  <input class="input" type="text" value="{{$author->lname}}" name="lname" min=5 max=50>
                                                </div>
                                                @error('lname')
                                                <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                              @enderror
                                              </div>
                                              <div class="field">
                                                <label class="label">Middle name</label>
                                                <div class="control">
                                                  <input class="input" type="text" value="{{$author->mname}}" name="mname" min=5 max=50>
                                                </div>
                                                @error('mname')
                                                <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                              @enderror
                                              </div>
                                              <div class="field">
                                                <label class="label">Author Information</label>
                                                <div class="control">
                                                  <textarea style="resize: none;" class="textarea" rows=10 name="description" min=5 max=500>{{$author->description}}"</textarea>
                                                </div>
                                                @error('description')
                                                <label class="has-text-danger mb-2 mt-2">{{$message}}</label>
                                              @enderror
                                              </div>
                                              <input type="hidden" name="updated_at" value="<?=date("Y-m-d H:i:s")?>">
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
                                  </x-edit-modal>
                                    <button class="button is-danger js-modal-trigger" data-target="modal-delete-book{{$author->id}}">
                                      <span class="icon-text">
                                          <span class="icon">
                                              <i class="fas fa-trash-can"></i>
                                          </span>
                                      </span>
                                    </button>
                                    <x-delete-modal id="modal-delete-book{{$author->id}}">
                                      <header class="modal-card-head">
                                        <p class="modal-card-title">Delete Author?</p>
                                        <button class="delete" aria-label="close"></button>
                                      </header>
                                        <section class="modal-card-body">
                                          <form method="POST" action="/deleteauthor">
                                            @csrf
                                          <input type="hidden" name="id" value="{{$author->id}}">
                                            <p class="subtitle is-5"> 
                                                Are you sure to delete this Author?
                                            </p>
                                        </section>
                                    </x-delete-modal>
                                    
                                  </div>
    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                            <tfoot>
                                <tr>
                                    <th>Author ID</th>
                                    <th>First name</th>
                                    <th>Last Name</th>
                                    <th>Middle name</th>
                                    <th>Description</th>
                                    <th>Date Created</th>
                                    <th>Date Updated</th>
                                  <th>Action</th>
                                </tr>
                            </tfoot>
                    </x-tables>
                </div>
        </x-page-layout>
</x-layout>