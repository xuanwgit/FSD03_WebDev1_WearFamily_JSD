

<?php $__env->startSection('assets'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/styles/filter.css'), false); ?>">
    <script src="<?php echo e(asset('scripts/filter.js'), false); ?>" defer></script>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('content'); ?>
<!--?php print_r($sets) ?-->
<div class="container">
    <div class="row">

        <!-- Left filter bar -->
        <div class="col-3">

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="Colors">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Colors
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check">
                                <input class="form-check-input chkColors" type="checkbox" value="" attr-name="<?php echo e($color->name, false); ?>" id="<?php echo e($color->id, false); ?>">
                                <label class="form-check-label" for="<?php echo e($color->id, false); ?>">
                                    <?php echo e($color->name, false); ?>

                                </label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="Sizes">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Sizes
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check">
                                <input class="form-check-input chkSizes" type="checkbox" value="" attr-name="<?php echo e($size->name, false); ?>" id="<?php echo e($size->id, false); ?>">
                                <label class="form-check-label" for="<?php echo e($size->id, false); ?>">
                                    <?php echo e($size->name, false); ?>

                                </label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of Left Filter bar -->

        <!-- Filtered results -->
        <div class="col-9">
            <h2 id="setCategory"><?php echo e($category, false); ?></h2>
            <div class="row g-4 mt-3 ms-2" id="product-list">
                <?php $__currentLoopData = $sets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $set): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 bags">
                    <div class="produc-img">
                        <a href="/ensembles/<?php echo e($set->slug, false); ?>"><img src="/<?php echo e($set->image, false); ?>" alt="" class="d-block mx-auto img-fluid"></a>
                    </div>
                    <div class="product-content text-center py-3">
                        <span class="d-block fw-bold text-uppercase"><?php echo e($set->name, false); ?></span>
                        <span class="d-block"><?php echo e($set->price, false); ?></span>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div> <!-- end Filtered results -->              
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/filter.blade.php ENDPATH**/ ?>