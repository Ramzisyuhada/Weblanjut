

<?php $__env->startSection('head'); ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <?php if(session('success')): ?>
        <div class='alert alert-success'><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <div class="panel">
            <div class="panel-heading">
                <h4>Ganti Password</h4>
            </div>
            <div class="panel-body">
                <form action="<?php echo e(route('aksiedit')); ?>" method="post">
                <?php echo csrf_field(); ?>    
                    <?php echo method_field('patch'); ?> 
                    <div class="form-group">
                        <label>Nama Baru</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Baru Anda .." value="<?php echo e($user->name); ?>">
                    </div>
                    <div class="form-group">
                        <label>Masukkan Nomertelepon Baru</label>
                        <input type="text" class="form-control" name="nomertelepon" placeholder="Masukkan nomertelepon Anda .." value="<?php echo e($user->nomertelepon); ?>">
                    </div>
                    <div class="form-group">
                        <label>Masukkan Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat Anda .." value="<?php echo e($user->alamat); ?>">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Ganti Password">
                </form>          
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('user.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//user/edit.blade.php ENDPATH**/ ?>