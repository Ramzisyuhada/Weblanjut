

<?php $__env->startSection('head'); ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Transaksi Laundry Baru</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br/>
                <br/>
                <form method="post" action="<?php echo e(route('create')); ?>">
                <?php echo csrf_field(); ?>
                <?php if(session('success')): ?>
                <div class='alert alert-info'><?php echo e(session('success')); ?>!</div>
          <?php endif; ?>
                
                 
                    <div class="form-group">
                        <label>Pelanggan</label>
                        <select class="form-control" name="user_id" required="required">
                            <option value="">- Pilih Pelanggan</option>
                            <?php $__currentLoopData = $user1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item -> id); ?>"><?php echo e($item -> name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <select class="form-control" name="user_layanan" required="required">
                            <option value="">- Pilih Layanan</option>
                            <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item1 -> id); ?>"><?php echo e($item1 -> name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="user_kategori" required="required">
                            <option value="">- Pilih Kategori bahan</option>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item2 -> id); ?>"><?php echo e($item2 -> name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Pakaian</label>
                        <select class="form-control" name="user_item" required="required">
                            <option value="">- Pilih Kategori bahan</option>
                            <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item3 -> id); ?>"><?php echo e($item3 -> name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <select class="form-control" name="harga_id" required="required">
                            <?php $__currentLoopData = $harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item5 -> id); ?>"><?php echo e($item5 -> harga); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="number" class="form-control" name="Berat" placeholder="Masukkan berat cucian .." required="required">
                    </div>
                    <div class="form-group">
                        <label>Tgl  Selesai</label>
                        <input type="date" class="form-control" name="selesai" required="required">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

 </body>
 </html>
<?php echo $__env->make('admin.template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laundry_uas1\resources\views//admin/tambahtransaksi.blade.php ENDPATH**/ ?>