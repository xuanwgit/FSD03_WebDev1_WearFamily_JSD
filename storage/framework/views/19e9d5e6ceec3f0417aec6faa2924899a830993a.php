

<?php $__env->startSection('title'); ?> 
  My Orders / View
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class ="container">
    <div class ="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Order View
              <a href="<?php echo e(url('my-orders'), false); ?>" class ="btn btn-warning text-white float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
          <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
              <div class="col-md-4 ">
                <h4>Shippping Details</h4>
                <hr>
                <label class="fw-bolder" for="">First Name</label>
                <div class="border p-2"> <?php echo e($item-> firstname, false); ?></div>
                <label class="fw-bolder" for="">Last Name</label>
                <div class="border p-2"> <?php echo e($item-> lastname, false); ?></div>
                <label class="fw-bolder" for="">Shipping Address</label>
                <div class="border p-2"> 
                  <?php echo e($item-> address, false); ?>, </br>
                  <?php echo e($item-> city, false); ?>,</br>
                  <?php echo e($item-> state, false); ?>,</br>
                  <?php echo e($item-> country, false); ?></br>
                </div>
                <label class="fw-bolder" for="">Telephone</label>
                <div class="border p-2"> <?php echo e($item-> mobile, false); ?></div>
                <label class="fw-bolder" for="">Postal Code</label>
                <div class="border p-2"> <?php echo e($item-> zip, false); ?></div>
              </div>  
              <div class="col-md-8">
              <h4>Order Details</h4>
              <hr>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Order Number</th>
                    <th>Image</th>
                    <th>Set</th>
                    <th>Product Number</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $item -> OrderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($item-> id, false); ?></td>
                      <td><img src="/<?php echo e($value->products -> sets -> image, false); ?>" alt="<?php echo e($value -> products -> sets -> name, false); ?>" width="100px"/></td>
                      <td><?php echo e($value -> products -> sets -> name, false); ?> </td>
                      <td><?php echo e($value -> product_id, false); ?> </td>
                      <td><?php echo e($value -> quantity, false); ?> </td>
                      <td>$<?php echo e($value -> products -> price, false); ?> </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <h4 class="px-2">Grand Total: <span class="float-end">$<?php echo e($item -> total, false); ?></span> </h4>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </div>
      </div>       
    </div>
  </div>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/view-order.blade.php ENDPATH**/ ?>