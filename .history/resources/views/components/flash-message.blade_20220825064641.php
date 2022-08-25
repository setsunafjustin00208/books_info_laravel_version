

                                      <div class="field icon-text mt-4 mb-4 has-text-danger">
                                        <?php
                                                        if(isset($validation))
                                                        {
                                            ?>
                                                    <span class="icon">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </span>
                                                    <span>
                                                            <?php echo $validation ?>
                                                    </span>
                                        <?php
                                                        }
                                        ?>
                                </div>