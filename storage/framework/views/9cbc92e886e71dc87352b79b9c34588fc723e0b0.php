<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">   
    <title><?php echo e(config('app.name', 'TPSPANEL')); ?></title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script>
    var baseUrl="<?php echo e(url('')); ?>";
    </script>
     <!-- Styles -->     
    <?php echo $__env->make('common/commoncss', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?> 
</head>
   <div id="wrapper">
        <?php echo $__env->make('common/leftpanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>      
        <div id="page-wrapper" class="gray-bg">
            <?php echo $__env->make('common/toppanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
            <div class="main-content-inner">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        <div>
       
    </div>
    
    <!-- Scripts -->
    <?php echo $__env->make('common/commonjs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
    
</body>
</html>
