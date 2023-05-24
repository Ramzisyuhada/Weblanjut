

<?php $__env->startSection('head'); ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Transaksi Laundry</h4>
        </div>
        <div class="panel-body">
            
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                   
                </tr>
               <?php
               $total = 0;
                $no=1;
               ?>
               <?php
               $total = ($us['Berat']*$us->class1['harga'])
               ?>
                    <tr>
                 
                        <td><?php echo e($no++); ?></td>
                        <td>INVOICE <?php echo e($us -> id); ?></td>
                        <td><?php echo e($us -> created_at); ?></td>
                        <td><?php echo e($us -> class['name']); ?></td>
                        <td><?php echo e($us -> Berat); ?></td>
                        <td><?php echo e($us -> selesai); ?></td>
                        <td><?php echo e($total); ?></td>
                        <td><?php echo e($us -> class3['name']); ?></td>
                        <td><?php echo e($us -> class4['name']); ?></td>
                        <td><?php if($us -> user_status == 1): ?>
                            <div class='label label-warning'>Dicuci</div>
                            <?php elseif($us -> user_status == 2): ?>
                            <div class='label label-info'>Proses</div></td>
                            <?php elseif($us -> user_status == 3): ?>
                            <div class='label label-success'>SELESAI</div>
                            <?php endif; ?></td>
                        
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                        
                      
            
                       
                    </tr>
                    
              
             
            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

 </body>
 </html>
<?php echo $__env->make('user.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//user/history.blade.php ENDPATH**/ ?>