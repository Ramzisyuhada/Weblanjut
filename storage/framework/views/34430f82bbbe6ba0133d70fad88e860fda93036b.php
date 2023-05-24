

<?php $__env->startSection('head'); ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pakaian</h4>
        </div>
        
        <div class="panel-body">
            <a href="/admin/pakaianedit" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            <?php if(session('msg')): ?>
            <div class='alert alert-success'><?php echo e(session('msg')); ?></div>
            <?php elseif(session('hapus')): ?>
        <div class='alert alert-danger'><?php echo e(session('hapus')); ?>!</div>
            <?php endif; ?>
            <table class="table table-bordered table-striped">
             <?php
                $no = 1;
               
             ?>
                <tr>
                    <th width="1%">No</th>
                    <th>nama</th>
                    <th width="1%">OPSI</th>
                </tr>
    <?php $__currentLoopData = $pakaian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
                    <tr>
                        
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($w -> name); ?></td>
                        <td>
                            <a href="/admin/<?php echo e($w -> id); ?>/pakaianedit" class="btn btn-sm btn-danger">Hapus</a>
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
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/pakaian.blade.php ENDPATH**/ ?>