

<?php $__env->startSection('assets'); ?>
    <script src="<?php echo e(asset('scripts/cart.js'), false); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php 
if (Auth::check()){
    $id = Auth::id();
} 
else {
    header("Location: /login");
    exit();
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- cart Form  -->
<form action="" onreset="location.reload();" onsubmit="">
    <div class="container ">
        <div class="row">
            <div class="col-8" >
                <!-- <h4 class="kaushan" style="color: var(--custom-blue)"> -->
                <h4>
                    Cart:
                </h4>
                <hr />
                <div class="col-12 px-1" id="cart">
                <label class = my-2></label>
                    <table id="tblProducts">
                        <input type="hidden" value="<?php echo e($cost=0, false); ?>"/>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="col=2" style ="text-align: left;" >
                                <a  href="#" >
                                <img class="img-thumbnail" href="#" style="width: 200px" src="/<?php echo e($item->image, false); ?>">
                                </a>
                            </td>
                            <td class="text col-7" style ="text-align: left;">
                                <h6><?php echo e($item->name, false); ?></h6>
                                <a>Siz: <?php echo e($item->size, false); ?>, Cat: <?php echo e($item->category, false); ?>, Col: <?php echo e($item->color, false); ?>, Mem: <?php echo e($item->member, false); ?>, Id: <?php echo e($item->product_id, false); ?> </a>
                                <p><a href="delete/<?php echo e($item->id, false); ?>">Remove</a></p>
                            </td>
                            <td class="col-1" style = "text-align: right;">
                                <input class="col-12 quantity" type="number" step="1" min="1" max="10" style = "text-align: center;" name="quantity" id="<?php echo e($item->product_id, false); ?>" size="1" value="<?php echo e($item->quantity, false); ?>"/>
                            </td>
                            <td><input type="hidden" class="price" value="<?php echo e($item->price, false); ?>" name="price"/></td>
                            <td><input type="hidden" class="product_id" id="product_id" name="product_id" value="<?php echo e($item->product_id, false); ?>"/></td>
                            <td class="col-1" style = "text-align: right;"></td>
                            <td class="col-1" style = "text-align: right;">
                                <input class="col-12 subtot" style = "text-align: right;" name="subtot" id="subtot" readonly="readonly" type="text" step="" value="<?php echo e($item->quantity*$item->price, false); ?>"/>
                            </td>    
                        </tr>
                        <input type="hidden" value="<?php echo e($cost=$cost+$item->quantity*$item->price, false); ?>"/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <!-- <h4 class="kaushan" style="color: var(--custom-blue)"> -->
                <h4>
                    Summary:
                </h4>
                <hr/>
                <table>
                    <tr>
                        <td colspan="2" class="" style = "width: 100%;">
                        <h6>Subtotal (CAD)</h6>
                        <small class="text-muted">Tota of Products</small>
                        </td>
                        <td class="" style = "text-align: right;">
                        <input class="grdtot" style = "text-align: right;" name="" id="grdtot" size="7" readonly="readonly"  value="<?php echo e($cost, false); ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="" style = "width: 100%;"><h6>Shipping</h6>
                        <small class="text-muted">Standard Shiping (CAD)</small></td>
                        <td class="" style = "text-align: right;">
                        <input class="num" style = "text-align: right;" name="ship" id="txtShip" size="7" readonly="readonly" value="5.00" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="" style = "width: 100%;">
                        <h6>OrederTotal (CAD)</h6>
                        <small class="text-muted">Total Products + Shiping</small>
                    </td>
                        <td class="" style = "text-align: right;">
                            <input class="grdtotShip" style = "text-align: right;" name="" id="grdtotShip" size="7" readonly="readonly" value="<?php echo e($cost+5.00, false); ?>"/>
                        </td>
                    </tr>
                </table>
                <hr/>
                <div class="input-group">
                    <div class="col text-center">
                        <input type="Submit"  class="button btn-outline-primary shadow rounded addToOrder" value="Submit Order"></input>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/cart.blade.php ENDPATH**/ ?>