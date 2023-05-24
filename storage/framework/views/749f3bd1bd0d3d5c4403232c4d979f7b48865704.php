

<?php $__env->startSection('head'); ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Harga</h4>
        </div>
        <div class="panel-body">
            <a href="/admin/tambahpelanggan" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            <?php if(session('msg')): ?>
                <div class='alert alert-info'><?php echo e(session('msg')); ?>s</div>
                 <?php endif; ?>
            <?php $__currentLoopData = $harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th width="">OPSI</th>
                </tr>
   
                    <tr>
                   
                        <td><?php echo e($aw -> id); ?></td>
                        <td>Harga Perkilo</td>
                        <td><?php echo e($aw -> harga); ?></td>
                   
                    
                        <td>
                            <a href="/admin/<?php echo e($aw -> id); ?>/editharga" class="btn btn-sm btn-info">Edit</a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                     
                    </tr>
              
                
            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/harga.blade.php ENDPATH**/ ?>