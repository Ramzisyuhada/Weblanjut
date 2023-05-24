

<?php $__env->startSection('head'); ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Transaksi Laundry Baru</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br/>
                <br/>
                <form method="post" action="/admin/<?php echo e($transaksi -> id); ?>/edttransaksi">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Pelanggan</label>
                        <select class="form-control" name="user_status" required="required" >
                            <option value="<?php echo e($transaksi -> user_status); ?>">- Pilih Pelanggan</option>
                            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item -> id); ?>"><?php echo e($item -> name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

 </body>
 </html>
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/edttransaksi.blade.php ENDPATH**/ ?>