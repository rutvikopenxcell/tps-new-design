    <div class="row border-bottom">
  <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                
                


                <li>
                     <a  href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form1').submit();">
                                        <i class="fa fa-sign-out"></i>  <?php echo e(__('Logout')); ?>

                     </a>
                    <form id="logout-form1" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                    </form>
                   
                </li>
            </ul>

        </nav>
    </div>