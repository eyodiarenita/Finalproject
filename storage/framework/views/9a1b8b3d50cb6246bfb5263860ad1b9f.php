

<?php $__env->startSection('content'); ?>
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1>LOGIN</h1>
  <form action="/sesi/login" method="POST">
     <?php echo csrf_field(); ?>
     <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" value="<?php echo e(Session::get('email')); ?>" class="form-control" id="email" name="email" placeholder="Enter email">
     </div>
     <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
     </div>
     <button type="submit" class="btn btn-primary">Login</button>
      
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\finalproject\resources\views/sesi/index.blade.php ENDPATH**/ ?>