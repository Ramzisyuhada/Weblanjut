<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset ('js/jquery.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset ('js/bootstrap.js')); ?>"></script>
</head>
<body style="background: #f0f0f0">
    <br/>
    <br/>
    <center>
        <h2>Tambah Pelanggan</h2>
    </center>
    <br/>
    <br/>
    
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='alert alert-danger'><?php echo e($items); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
            <form action="<?php echo e(route('aksitambah')); ?>" method="POST">  
            <?php echo csrf_field(); ?>
                <div class="panel">
                    <br/>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                        </div>
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" >
                        </div>  
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?php echo e(old('alamat')); ?>">
                        </div>  
                        <div class="form-group">
                            <label>Nomertelepon</label>
                            <input type="number" class="form-control" name="nomertelepon" value="<?php echo e(old('nomertelepon')); ?>">
                        </div>  
                        
                        <input type="submit" class="btn btn-primary" value="Tambah">                
                    </div>
                    <br/>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/tambahpelanggan.blade.php ENDPATH**/ ?>