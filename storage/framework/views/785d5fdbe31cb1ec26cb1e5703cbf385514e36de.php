                <?php if($errors->any()): ?>
                <div class="alert-dismiss">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                </div>
                </div>
                <?php endif; ?>