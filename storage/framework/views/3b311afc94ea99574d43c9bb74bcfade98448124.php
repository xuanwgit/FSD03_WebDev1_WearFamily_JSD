

<?php $__env->startSection('title'); ?> 
  My Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class ="container">
    <div class ="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>My Order</h4>
          </div>
          <div class="card-body">
          <table class="table table-bordered">
          <thead>
            <tr>
              <th>Order Number</th>
              <th>Total Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($item-> id, false); ?> </td>
                <td><?php echo e($item-> total, false); ?></td>
                <td><?php echo e($item-> status, false); ?></td>
                <td>
                  <a href="<?php echo e(url('view-order/'.$item->id), false); ?>" class="btn btn-primary">View</a>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

        </div>
        </div>
        
      </div>
    </div>

  </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/order.blade.php ENDPATH**/ ?>