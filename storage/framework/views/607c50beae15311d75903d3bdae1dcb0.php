
<!-- START FORM -->
<?php $__env->startSection('content'); ?>


<form action='<?php echo e(url('final')); ?>' method='post'>
<?php echo csrf_field(); ?> 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='<?php echo e(url('final')); ?>' class="btn btn-secondary"><< back </a>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nim' value="<?php echo e(Session::get('nim')); ?>" id="nim">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="<?php echo e(Session::get('name')); ?>" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="major" class="col-sm-2 col-form-label">Major</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='major' value="<?php echo e(Session::get('major')); ?>" id="major">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="major" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SAVE</button></div>
        </div>
</div>
</form>
    <!-- END FORM -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\finalproject\resources\views/project/create.blade.php ENDPATH**/ ?>