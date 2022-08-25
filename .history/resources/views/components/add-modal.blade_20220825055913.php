    <div class="buttons">
              <button class="button is-success js-modal-trigger" data-target="modal-add-data">
                <span class="icon-text">
                    <span class="icon">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span>
                        Add Book
                    </span>
                </span>
              </button>
                <div class="modal" id="modal-add-data">
                    <div class="modal-background"></div>
                    <div class="modal-card">
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
                                          <select name="author" required>
                                           
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
          </div>