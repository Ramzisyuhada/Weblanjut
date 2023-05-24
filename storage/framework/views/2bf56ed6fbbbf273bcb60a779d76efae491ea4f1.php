

<?php $__env->startSection('head'); ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <?php if(session('error')): ?>
        <div class='alert alert-success'><?php echo e(session('error')); ?></div>
        <?php endif; ?>
        <div class="panel">
            <div class="panel-heading">
                <h4>Ganti Password</h4>
            </div>
            <div class="panel-body">
                <form action="<?php echo e(route('pwdedit')); ?>" method="post" >
                    <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>   
                <div class="form-group">
                        <label>current_password</label>
                        <input type="password" class="form-control" name="current_password" placeholder="Masukkan Password yang sama .." value="">
                    </div>
                    <div class="form-group">
                        <label>Masukkan Password Baru</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru Anda .." value="">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Ganti Password">
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/edtpassword.blade.php ENDPATH**/ ?>