<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.navbar-users','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar-users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.hero','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.page-layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div class="column is-2 ml-4 has-background-light">
                <aside class="menu">
                    <p class="menu-label">
                      Menu
                    </p>
                    <ul class="menu-list">
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
                    </ul>
                  </aside>
                </div>
                <div class="column box">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.flash-message','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-scripts','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.add-modal','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('add-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <header class="modal-card-head">
                            <p class="modal-card-title">Add a new Author</p>
                            <button class="delete" aria-label="close"></button>
                        </header>
                            <section class="modal-card-body">
                              <form method="POST" action="/addauthor">
                                <?php echo csrf_field(); ?>
                                <div class="container">
                                    <div class="field">
                                      <label class="label">First name</label>
                                      <div class="control">
                                        <input class="input" type="text" placeholder="Enter First name" name="fname" min=5 max=150>
                                      </div>
                                      <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="field">
                                      <label class="label">Last name</label>
                                      <div class="control">
                                        <input class="input" type="text" placeholder="Enter Last name" name="lname" min=5 max=50>
                                      </div>
                                      <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="field">
                                      <label class="label">Middle name</label>
                                      <div class="control">
                                        <input class="input" type="text" placeholder="Enter Middle name" name="mname" min=5 max=50>
                                      </div>
                                      <?php $__errorArgs = ['mname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="field">
                                      <label class="label">Author Information</label>
                                      <div class="control">
                                        <textarea style="resize: none;" class="textarea" placeholder="Enter Author Information" rows=10 name="description" min=5 max=500></textarea>
                                      </div>
                                      <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.tables','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                        <thead>
                            <tr>
                                <th>Author ID</th>
                                <th>First name</th>
                                <th>Last Name</th>
                                <th>Middle name</th>
                                <th>Descriptiom</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                                <td><?php echo e($author->id); ?></td>
                                <td><?php echo e($author->fname); ?></td>
                                <td><?php echo e($author->lname); ?></td>
                                <td><?php echo e($author->mname); ?></td>
                                <td><?php echo e($author->description); ?></td>
                                <td><?php echo e($author->created_at); ?></td>
                                <td><?php echo e($author->updated_at); ?></td>
                                <td>
                                  <div class="buttons">
                                    <button class="button is-warning js-modal-trigger" data-target="modal-edit-author<?php echo e($author->id); ?>">
                                      <span class="icon-text">
                                          <span class="icon">
                                              <i class="fas fa-pen-to-square"></i>
                                          </span>
                                      </span>
                                    </button>
                                    <div class="modal" id="modal-edit-author<?php echo e($author->id); ?>">
                                        <div class="modal-background"></div>
                                          <div class="modal-card">
                                            <header class="modal-card-head">
                                                <p class="modal-card-title">Add a new Author</p>
                                                <button class="delete" aria-label="close"></button>
                                            </header>
                                                <section class="modal-card-body">
                                                  <form method="POST" action="/updateauthor">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($author->id); ?>">
                                                    <div class="container">
                                                        <div class="field">
                                                          <label class="label">First name</label>
                                                          <div class="control">
                                                            <input class="input" type="text" value="<?php echo e($author->fname); ?>" name="fname" min=5 max=150>
                                                          </div>
                                                          <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                          <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                        <div class="field">
                                                          <label class="label">Last name</label>
                                                          <div class="control">
                                                            <input class="input" type="text" value="<?php echo e($author->lname); ?>" name="lname" min=5 max=50>
                                                          </div>
                                                          <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                          <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                        <div class="field">
                                                          <label class="label">Middle name</label>
                                                          <div class="control">
                                                            <input class="input" type="text" value="<?php echo e($author->mname); ?>" name="mname" min=5 max=50>
                                                          </div>
                                                          <?php $__errorArgs = ['mname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                          <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                        <div class="field">
                                                          <label class="label">Author Information</label>
                                                          <div class="control">
                                                            <textarea style="resize: none;" class="textarea" rows=10 name="description" min=5 max=500><?php echo e($author->description); ?>"</textarea>
                                                          </div>
                                                          <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                          <label class="has-text-danger mb-2 mt-2"><?php echo e($message); ?></label>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                              <button class="button">
                                                <span class="icon-text"><span class="icon">
                                                  <i class="fas fa-ban"></i>
                                                </span>
                                                <span>Cancel</span>
                                            </button>
                                          </footer>
                                      </div>
                                    </div>
                                   
                                    <button class="button is-danger js-modal-trigger" data-target="modal-delete-book<?php echo e($author->id); ?>">
                                      <span class="icon-text">
                                          <span class="icon">
                                              <i class="fas fa-trash-can"></i>
                                          </span>
                                      </span>
                                    </button>
                                    <div class="modal" id="modal-delete-book<?php echo e($author->id); ?>">
                                      <div class="modal-background"></div>
                                      <div class="modal-card">
                                          <header class="modal-card-head">
                                              <p class="modal-card-title">Delete Author?</p>
                                              <button class="delete" aria-label="close"></button>
                                          </header>
                                              <section class="modal-card-body">
                                                <form method="POST" action="/deleteauthor">
                                                  <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?php echo e($author->id); ?>">
                                                  <p class="subtitle is-5"> 
                                                      Are you sure to delete this Author?
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <th>Author ID</th>
                                    <th>First name</th>
                                    <th>Last Name</th>
                                    <th>Middle name</th>
                                    <th>Descriptiom</th>
                                    <th>Date Created</th>
                                    <th>Date Updated</th>
                                  <th>Action</th>
                                </tr>
                            </tfoot>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\book_info\resources\views/appviews/authors.blade.php ENDPATH**/ ?>