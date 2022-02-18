
<?php if($show): ?>
 <p>ok done </p>
<?php else: ?> 
 <p> ok false </p>
<?php endif; ?> 


<?php for($i=1; $i<=9;$i++): ?>

<?php echo e($i); ?>

<?php endfor; ?>


<?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($cus); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laravel_new\new_pro\resources\views/customer.blade.php ENDPATH**/ ?>