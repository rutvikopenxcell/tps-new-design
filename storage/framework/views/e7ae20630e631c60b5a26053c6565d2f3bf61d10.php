<?php if(session('status')): ?>
<div class="alert-dismiss">
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('status')); ?>

   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
<?php elseif(session('success')): ?>
<div class="alert-dismiss">
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('success')); ?>

    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
<?php elseif(session('info')): ?>
<div class="alert-dismiss">
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <?php echo e(session('info')); ?>

   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
<?php elseif(session('warning')): ?>
<div class="alert-dismiss">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(session('warning')); ?>

   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
<?php elseif(session('error')): ?>
<div class="alert-dismiss">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(session('error')); ?>

    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
<?php endif; ?>