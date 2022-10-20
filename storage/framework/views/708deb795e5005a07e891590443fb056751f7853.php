<h1>User List</h1>
<li>
    <span>Name</span>
    <span>Email</span>
</li>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
    <span><?php echo e($item->name, false); ?></span>
    <span><?php echo e($item->email, false); ?></span>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<style>
    span{
        color: red;
        display: inline-block;
        width: 120px;
        background-color: bisque;
        margin-bottom: 3px;
        margin-left: 3px;
        padding: 10px;
    }
    li{
        list-style: none;
    }
</style>
<?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/user.blade.php ENDPATH**/ ?>