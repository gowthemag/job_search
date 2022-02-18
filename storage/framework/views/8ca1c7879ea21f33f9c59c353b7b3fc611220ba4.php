<html>
<head>
    <title> customer create </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
</head>

<body>
    <div class="container">
        <form action=" <?php echo e(url('cus-save')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" class="form-control" name="fname" value="" >
            <button class="btn btn-primary" type="submit">submit </button>
        </form>
    </div>

</body>
</html><?php /**PATH C:\laravel_new\new_pro\resources\views/customer/form.blade.php ENDPATH**/ ?>