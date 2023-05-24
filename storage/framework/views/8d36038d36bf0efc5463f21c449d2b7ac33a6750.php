

<?php $__env->startSection('head'); ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pelanggan</h4>
        </div>
        
        <div class="panel-body">
            <a href="/admin/tambahpelanggan" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>nama</th>
                    <th>role</th>
                    <th>HP</th>
                    <th>Alamat</th>
                    <th width="15%">OPSI</th>
                </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($w -> id); ?></td>
                        <td><?php echo e($w -> name); ?></td>
                        <td><?php echo e($w -> role); ?></td>
                        <td><?php echo e($w -> nomertelepon); ?></td>
                        <td><?php echo e($w -> alamat); ?></td>
                        <td>
                            <a href="/admin/<?php echo e($w -> id); ?>/editpelanggan" class="btn btn-sm btn-info">Edit</a>
                            <a href="/destroy/<?php echo e($w->id); ?>/editpelanggan" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                        
                    </tr>
              
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/pelanggan.blade.php ENDPATH**/ ?>