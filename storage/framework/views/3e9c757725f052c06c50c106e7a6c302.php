
        <!-- START DATA -->
        <?php $__env->startSection('content'); ?>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- SEARCH FORM  -->
            <div class="pb-3">
              <form class="d-flex" action="<?php echo e(url('final')); ?>" method="get">
                  <input class="form-control me-1" type="search" name="keywords" value="<?php echo e(Request::get('keywords')); ?>" placeholder="Enter keywords" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Search</button>
              </form>
            </div>
            
            <!-- ADD DATA BUTTON -->
            <div class="pb-3">
              <a href='<?php echo e(url('final/create')); ?>' class="btn btn-primary">+ Add Data</a>
            </div>
      
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-3">NIM</th>
                        <th class="col-md-4">Name</th>
                        <th class="col-md-2">Major</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem() ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($item->nim); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->major); ?></td>
                        <td>
                            <a href= '<?php echo e(url('/final/edit/'.$item->nim)); ?>' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Are you sure want to delete the data?')" class='d-inline' action="<?php echo e(url('project/'.$item->nim)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        <?php echo e($data->withQueryString()->links()); ?>   
      </div>
      <!-- END DATA --> 
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\finalproject\resources\views/project/index.blade.php ENDPATH**/ ?>