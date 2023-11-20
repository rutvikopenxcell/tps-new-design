  <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                  
                  <div class="dropdown profile-element">  
                    
                         <img alt="image" class="rounded-circle" src="<?php echo e(asset('public/assets/img/profile_small.jpg')); ?>"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo e(Auth::user()->name); ?></span>
                            
                         
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                          <?php if(Auth::user()->id==1){ ?>
                           <li><a class="dropdown-item" href="<?php echo e(url('newuser')); ?>">Create New User</a></li>
                          <?php } ?>  
                           <li><a class="dropdown-item" href="<?php echo e(url('changepassword')); ?>">Change Password</a></li>   
                            <li>
                              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         <?php echo e(__('Logout')); ?>

                                     </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>  
                      </div>  
                    <div class="logo-element">
                        TPS PANEL
                    </div>
                </li>
               
                

               


          

                

                  <li class="<?php if(Request::is(['country-list', 'language-list', 'country-lang-list', 'create-country-lang-list','testimonial*','referralcode*'])){ echo "active"; } ?>">
                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-globe"></i><span class="nav-label"> Country / Market</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                       <!--  <li class="<?php if(Request::is(['country-list'])){ echo "active"; } ?>">
                            <a href="<?php echo e(url('country-list')); ?>">Country List</a>
                        </li>
                        <li class="<?php if(Request::is(['language-list'])){ echo "active"; } ?>">
                        <a href="<?php echo e(url('language-list')); ?>">Language List</a>
                        </li> -->
                        <li class="<?php if(Request::is(['country-lang-list', 'create-country-lang-list'])){ echo "active"; } ?>">
                        <a href="<?php echo e(url('country-lang-list')); ?>">Country Language List</a>
                        </li>

                         <li class="<?php if(Request::is(['testimonial*'])){ echo "active"; } ?>">
                        <a href="<?php echo e(url('testimonial')); ?>">Testimonial</a>
                        </li>


                         <li class="<?php if(Request::is(['referralcode*'])){ echo "active"; } ?>">
                        <a href="<?php echo e(url('referralcode')); ?>">Referral Code & OTP</a>
                        </li>

                        <li class="<?php if(Request::is(['tpspage*'])){ echo "active"; } ?>">
                        <a href="<?php echo e(url('tpspage/section')); ?>">TPS page</a>
                        </li>

                      </ul>
                 </li>


                
              
           
            </ul>

        </div>
    </nav>