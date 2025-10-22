<!DOCTYPE html>
<html lang="en" <?php echo $__env->yieldContent('html-attributes'); ?>>

<head>
    <?php echo $__env->make('layouts.partials/title-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.partials/head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body <?php echo $__env->yieldContent('body-attributes'); ?>>

    <?php echo $__env->yieldContent('header'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.partials/footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\Users\nickt\OneDrive\Documents\GitHub\travelbuddy\resources\views/layouts/app.blade.php ENDPATH**/ ?>