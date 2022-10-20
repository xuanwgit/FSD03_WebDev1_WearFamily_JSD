

<?php $__env->startSection('assets'); ?>
    <script src="<?php echo e(asset('scripts/shopping.js'), false); ?>" defer></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="alert alert-warning alert-dismissible fade show" id="cartError" role="alert">
  <h5 id="cartErrorMsg"></h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-success alert-dismissible fade show" id="cartUpdated" role="alert">
  <h5 id="cartUpdatedMsg"></h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img id="item-display" class="img-fluid" src="/<?php echo e($set_image, false); ?>" alt="<?php echo e($set_name, false); ?>" />
                </div>
                <div class="col-md-8">
                    <h4 class="my-2"> 
                        <?php echo e($set_name, false); ?>

                    </h4>
                    <hr>

                    <form action="#" method="post" class="form" id="form">
                        <label class="fw-bold product-price"> Color </label>
                        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioColor" type="radio" name="allColors" id="<?php echo e($color->id, false); ?>">
                                <label for="<?php echo e($color->name, false); ?>"><?php echo e($color->name, false); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <hr>
                        <label class="fw-bold product-price"> Size </label>
                        <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product-title">
                                <?php echo e($key, false); ?>

                            </div>

                            <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input sizes" type="radio" name="size" id="<?php echo e($size->id, false); ?>" value="<?php echo e($size->price, false); ?>"/>                           
                                <label for="<?php echo e($size->name, false); ?>"><?php echo e($size->name, false); ?></label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <hr>

                        <label class="fw-bold product-price">Price $ </label>
                        <input id="price" type="text"  name="total" class="num fw-bold" readonly="readonly" style="font-size: 20px" ></input>
                        <hr>

                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label class="fw-bold product-price">Quantity </label>
                                <div class="input-group text-center mb3">
                                    
                                    <input type="number" step="1" min="1" max="10" value="1" style="text-align: center;" name="quantity" id="quantity" class="form-control"/>
                                    
                                </div>
                            </div>   
                        
                            <div class="col-md-10">
                                </br>
                                <button type="button" style="text-align: center;" class="btn btn-success me-2 float-start addToCart">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div>
                        <label class="fw-bold product-price"> Description </label>
                        <p>
                            <?php echo e($set_description, false); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>   
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/product.blade.php ENDPATH**/ ?>