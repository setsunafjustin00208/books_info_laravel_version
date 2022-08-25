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
                    <x-
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