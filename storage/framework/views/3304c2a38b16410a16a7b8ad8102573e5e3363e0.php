

<?php $__env->startSection('head'); ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Transaksi Laundry</h4>
        </div>
        <div class="panel-body">
            <a href="/admin/tambahtransaksi" class="btn btn-sm btn-info pull-right">Transaksi Baru</a>
            <br/>
            <br/>
            <?php if(session('hapus')): ?>
            <div class='alert alert-info'><?php echo e(session('hapus')); ?>!</div>
                 <?php endif; ?>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Berat (Kg)</th>
                    <th>Tgl. Selesai</th>
                    <th>Harga</th>
                    <th>Bahan</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th width="20%">OPSI</th>
                </tr>
                <?php 
                $no = 1; 
                $total = 0;
                ?>
                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                $total = ($s->class1['harga']*$s['Berat'])
                ?>
                    <tr>
                 
                        <td><?php echo e($no++); ?></td>
                        <td>INVOICE <?php echo e($s -> id); ?></td>
                        <td><?php echo e($s -> created_at); ?></td>
                        <td><?php echo e($s -> class['name']); ?></td>
                        <td><?php echo e($s -> Berat); ?></td>
                        <td><?php echo e($s -> selesai); ?></td>
                        <td><?php echo e($total); ?></td>
                        <td><?php echo e($s -> class3['name']); ?></td>
                        <td><?php echo e($s -> class4['name']); ?></td>
                        <td>  <?php if($s -> user_status == 1): ?>
                            <div class='label label-warning'>Dicuci</div>
                            <?php elseif($s -> user_status == 2): ?>
                            <div class='label label-info'>Proses</div></td>
                            <?php elseif($s -> user_status == 3): ?>
                            <div class='label label-success'>SELESAI</div>
                            <?php endif; ?></td>
                        
                        
                        
                        </td>
                        <td>
                        <a href="" target="_blank" class="btn btn-sm btn-warning">Invoice</a>
                        <a href="/admin/<?php echo e($s -> id); ?>/edttransaksi" class="btn btn-sm btn-info">Edit</a>
                        <a href="/destroy/<?php echo e($s->id); ?>" class="btn btn-sm btn-danger">Batalkan</a>
                        </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    
              
             
            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

 </body>
 </html>
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/transaksi.blade.php ENDPATH**/ ?>