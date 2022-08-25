<x-layout>
    <x-navbar />
    <div class="mt-6">
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
                        <a href="" class="is-active"><span class="icon-text">
                          <span class="icon is-medium">
                            <i class="fas fa-book-journal-whills fa-2x"></i>
                          </span>
                          <span class="">
                            Books
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="" class=""><span class="icon-text">
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
                <x-tables>
                        @foreach($books as $book)
                        </tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->book_name}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->publication_date_n_time}}</td>
                            <td>{{$book->id}}</td>
                            <td>{{$book->id}}</td>
                            <td>{{$book->id}}</td>
                        </tr>
                        @endforeach
                </x-tables>
        </x-page-layout>
    </div>
</x-layout>