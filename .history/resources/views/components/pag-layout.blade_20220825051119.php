<div class="columns is-mobile">
    <div class="column is-2 ml-4 has-background-light">
    <aside class="menu">
        <p class="menu-label">
          Menu
        </p>
        <ul class="menu-list">
          <li>
            <a href="<?=site_url('Views_Controller/books_dashboard')?>" class="is-active"><span class="icon-text">
              <span class="icon is-medium">
                <i class="fas fa-book-journal-whills fa-2x"></i>
              </span>
              <span class="">
                Books
              </span>
            </a>
          </li>
          <li>
            <a href="<?=site_url('Views_Controller/authors_dashboard')?>" class=""><span class="icon-text">
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
          <script>
                  document.addEventListener('DOMContentLoaded', () => {
      
                  function openModal($el) {
                      $el.classList.add('is-active');
                  }
  
                  function closeModal($el) {
                      $el.classList.remove('is-active');
                  }
  
                  function closeAllModals() {
                      (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                          closeModal($modal);
                      });
                  }
  
                  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
                      const modal = $trigger.dataset.target;
                      const $target = document.getElementById(modal);
  
                      $trigger.addEventListener('click', () => {
                          openModal($target);
                      });
                  });
  
                  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
                      const $target = $close.closest('.modal');
  
                      $close.addEventListener('click', () => {
                          closeModal($target);
                      });
                  });
  
              
                  document.addEventListener('keydown', (event) => {
                      const e = event || window.event;
  
                      if (e.keyCode === 27) {
                          closeAllModals();
                      }
                  });
              });
          </script>
          <div class="buttons">
              <button class="button is-success js-modal-trigger" data-target="modal-add-book">
                <span class="icon-text">
                    <span class="icon">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span>
                        Add Book
                    </span>
                </span>
              </button>
                <div class="modal" id="modal-add-book">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Add a new book</p>
                            <button class="delete" aria-label="close"></button>
                        </header>
                            <section class="modal-card-body">
                              <?=form_open('Database_Controller/add_book')?>
                              <?=validation_errors()?>
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
                                          <select name="author" required>
                                            <?php
                                                 $authorquery = $this->db->get('authors');
                                                 foreach($authorquery->result() as $authorrow)
                                                 {
                                            ?>
                                                  <option value="<?=$authorrow->fname?>&nbsp;<?=$authorrow->lname?>&nbsp;<?=$authorrow->mname?>"><p class="mr-3"><?=$authorrow->fname?> <?=$authorrow->lname?> <?=$authorrow->mname?></p></option>
                                            <?php
                                                 }
                                            ?>
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
                                  <input type="hidden" name="date_created" value="<?=date("Y-m-d")?>">
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
                                    Save Book
                                  </span>
                                </span>
                              </button>
                            <?=form_close()?>
                            <button class="button">
                              <span class="icon-text"><span class="icon">
                                <i class="fas fa-ban"></i>
                              </span>
                              <span>Cancel</span>
                          </button>
                        </footer>
                    </div>
                </div>
          </div>
          <?php
                  if(isset($success))
                  {
              ?>
                  <div class='container box has-background-success-light animate__animated animate__fadeInUpBig'>
                      <span class='icon-text has-text-success'><span class='icon'>
                          <i class='fas fa-check-square'></i>
                      </span>
                      <span>
                          <?php echo $success?>
                      </span>
                  </span>
              </div>
              <?php		
                  }
        ?>
      <script>
        $(document).ready(function () {
            $('#book').DataTable();
        });
      </script>
        <div class="table-container">
            <table class="table" id="book">
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
                      <?php
                          $bookquery = $this->db->get('books');
                          foreach($bookquery->result() as $bookrow)
                          {
                      ?>
                      <tr>		
                  <td><?=$bookrow->book_id?></td>
                  <td><?=$bookrow->name?></td>
                  <td><?=$bookrow->author?></td>
                  <td><?=$bookrow->description?></td>
                  <td><?=$bookrow->publication_date_n_time?></td>
                  <td><?=$bookrow->date_created?></td>
                  <td><?=$bookrow->date_updated?></td>
                  <td>
                    <div class="buttons">
                      <button class="button is-warning js-modal-trigger" data-target="modal-edit-book<?=$bookrow->book_id?>">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-pen-to-square"></i>
                            </span>
                            <span>
                                Edit book
                            </span>
                        </span>
                      </button>
                      <div class="modal" id="modal-edit-book<?=$bookrow->book_id?>">
                        <div class="modal-background"></div>
                          <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title">Edit a book</p>
                                <button class="delete" aria-label="close"></button>
                            </header>
                              <section class="modal-card-body">
                                <?=form_open('Database_Controller/update_book')?>
                                <?=validation_errors()?>
                                <input type="hidden" name="book_id" value="<?=$bookrow->book_id?>">
                                  <div class="container">
                                    <div class="field">
                                      <label class="label">Title</label>
                                      <div class="control">
                                        <input class="input" type="text" value="<?=$bookrow->name?>" name="name" min=5 max=150 required>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <label class="label">Author</label>
                                      <div class="control">
                                        <div class="select">
                                            <select name="author" required>
                                              <?php
                                                  $authorquery = $this->db->get('authors');
                                                  foreach($authorquery->result() as $authorrow)
                                                  {
                                              ?>
                                                    <option value="<?=$authorrow->fname?>&nbsp;<?=$authorrow->lname?>&nbsp;<?=$authorrow->mname?>"><p class="mr-3"><?=$authorrow->fname?> <?=$authorrow->lname?> <?=$authorrow->mname?></p></option>
                                              <?php
                                                  }
                                              ?>
                                            </select>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <label class="label">Description</label>
                                      <div class="control">
                                        <textarea style="resize: none;" class="textarea" rows=10 name="description" min=5 max=500 required><?=$bookrow->description?></textarea>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <label class="label">Publication Date and Time</label>
                                      <div class="control">
                                        <input class="input" type="datetime-local" value="<?=$bookrow->publication_date_n_time?>" name="publication_date_n_time" min=5 max=150 required>
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
                              <?=form_close()?>
                              <button class="button">
                                <span class="icon-text"><span class="icon">
                                  <i class="fas fa-ban"></i>
                                </span>
                                <span>Cancel</span>
                            </button>
                          </footer>
                      </div>
                    </div>
                    <button class="button is-danger js-modal-trigger" data-target="modal-delete-author<?=$bookrow->book_id?>">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-trash-can"></i>
                            </span>
                            <span>
                                Delete Book
                            </span>
                        </span>
                      </button>
                      <div class="modal" id="modal-delete-author<?=$bookrow->book_id?>">
                        <div class="modal-background"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title">Delete Book?</p>
                                <button class="delete" aria-label="close"></button>
                            </header>
                                <section class="modal-card-body">
                                  <?=form_open('Database_Controller/delete_book')?>
                                  <?=validation_errors()?>
                                  <input type="hidden" name="book_id" value="<?=$bookrow->book_id?>">
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
                                <?=form_close()?>
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
                      <?php
                          }
                      ?>
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
              </table>
        </div>  
    </div>
  </div>