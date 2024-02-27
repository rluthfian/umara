<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="PT Umara Multi Bisnis" content="PT Umara Multi Bisnis">
    <meta name="title" content="PT Umara Multi Bisnis">
    <meta name="description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta name="keywords" content="distribution company,perusahaan distribusi,perusahaan indonesia">
    <meta name="url" content="<?php echo e(base_url('')); ?>">
    <meta name="image" content="<?php echo e(assets_url('images/icons/logo-2.png')); ?>">
    <meta name="fb::app_id" content="">
    <meta name="article:author" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="PT Umara Multi Bisnis">
    <meta itemprop="description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta itemprop="image" content="<?php echo e(assets_url('images/icons/logo-2.png')); ?>">

    <!-- Facebook Meta Tags -->
    <meta property="og:author" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(base_url('')); ?>">
    <meta property="og:title" content="PT Umara Multi Bisnis">
    <meta property="og:description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta property="og:image" content="<?php echo e(assets_url('images/icons/logo-2.png')); ?>">
    <meta property="og:image:secure_url" content="<?php echo e(assets_url('images/icons/logo-2.png')); ?>" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="PT Tigaraksa Satria">
    <meta name="twitter:description" content="PT Umara Multi Bisnis merupakan Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.">
    <meta name="twitter:twitter-id" content="">
    <meta name="twitter:image" content="<?php echo e(assets_url('images/icons/logo-2.png')); ?>">

    <link rel="icon" href="<?php echo e(assets_url('images/icons/cropped-favicon-32x32.png')); ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo e(assets_url('images/icons/cropped-favicon-192x192.png')); ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo e(assets_url('images/icons/cropped-favicon-180x180.png')); ?>" />
    <meta name="msapplication-TileImage" content="<?php echo e(assets_url('images/icons/cropped-favicon-270x270.png')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title> <?php echo $__env->yieldContent('title'); ?> </title>
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp7.3\htdocs\umara\application\views/layouts/master.blade.php ENDPATH**/ ?>