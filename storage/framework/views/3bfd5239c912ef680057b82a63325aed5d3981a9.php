

<?php $__env->startSection('head'); ?>


 <?php if(session('tambah')): ?>
            <div class='alert alert-success'><center><?php echo e(session('tambah')); ?></center></div>
            <?php endif; ?>

            <div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px">SELAMAT DATANG DI <b>FAMILY LAUNDRY</b></h4>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="pull-right">
                                   <?php echo e($jumlahuser); ?>

                                </span>
                            </h1>
                            Jumlah Pelanggan
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-retweet"></i>
                                <span class="pull-right">
                              
                                <?php echo e($cuciansiap1); ?>

                                </span>
                            </h1>
                            Jumlah Cucian Di Proses
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-info-sign"></i>
                                <span class="pull-right">
                                <?php echo e($cuciansiap2); ?>   
                                </span>
                            </h1>
                            Jumlah Cucian Siap Ambil
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-ok-circle"></i>
                                <span class="pull-right">
                                <?php echo e($cuciansiap3); ?>   
                                   
                                </span>
                            </h1>
                            Jumlah Cucian Selesai
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Riwayat Transaksi Terakhir</h4>
        </div>
        <div class="panel-body">
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
                 
                </tr>
                <?php 
                $no = 1; 
                $total = 0;
                ?>
                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                $total = ($s['Berat']*$s->class1['harga'])
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
                        <td>
                            <?php if($s -> user_status == 1): ?>
                            <div class='label label-warning'>PROSES</div>
                            <?php elseif($s -> user_status == 2): ?>
                            <div class='label label-info'> Dicuci</div></td>
                            <?php elseif($s -> user_status == 3): ?>
                            <div class='label label-success'>SELESAI</div>
                            <?php endif; ?>
    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    
            </table>
        </div>
    </div>
</div>

 <?php $__env->stopSection(); ?>

 </body>
 </html>
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/dashboard.blade.php ENDPATH**/ ?>