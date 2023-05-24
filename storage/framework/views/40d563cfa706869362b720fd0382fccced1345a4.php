<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">
    <br/>
    <br/>
    <center>
        <h2>SISTEM INFORMASI FAMILY LAUNDRY Login</h2>
    </center>
    <br/>
    <br/>
    
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
        <?php if(session('logout')): ?>
        <div class='alert alert-info'><?php echo e(session('logout')); ?>!</div>
        <?php elseif(session('Gagal')): ?>
        <div class='alert alert-danger'><?php echo e(session('Gagal')); ?>!</div>
        <?php elseif(session('Succees')): ?>
        <div class='alert alert-info'><?php echo e(session('Succees')); ?></div>
        <?php endif; ?>
            
            <form action="<?php echo e(route('aksilogin')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div class="panel">
                    <br/>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>  

                        <input type="submit" class="btn btn-primary" value="Log In"> 
                       <center> <a href="register" >Register</a>    </center>           
                    </div>
                    <br/>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\laundry_uas1\resources\views/index.blade.php ENDPATH**/ ?>