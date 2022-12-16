<div class="form-group <?php echo e($errors->has('id_pesanan') ? 'has-error' : ''); ?>">
    <label for="id_pesanan" class="control-label"><?php echo e('Id Pesanan'); ?></label>
    <input class="form-control" name="id_pesanan" type="number" id="id_pesanan" value="<?php echo e(isset($pesanan->id_pesanan) ? $pesanan->id_pesanan : ''); ?>" >
    <?php echo $errors->first('id_pesanan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('jumlah_produk') ? 'has-error' : ''); ?>">
    <label for="jumlah_produk" class="control-label"><?php echo e('Jumlah Produk'); ?></label>
    <input class="form-control" name="jumlah_produk" type="number" id="jumlah_produk" value="<?php echo e(isset($pesanan->jumlah_produk) ? $pesanan->jumlah_produk : ''); ?>" >
    <?php echo $errors->first('jumlah_produk', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('nama_produk') ? 'has-error' : ''); ?>">
    <label for="nama_produk" class="control-label"><?php echo e('Nama Produk'); ?></label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="<?php echo e(isset($pesanan->nama_produk) ? $pesanan->nama_produk : ''); ?>" >
    <?php echo $errors->first('nama_produk', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH C:\BAP\UAS\UAS\resources\views/admin/pesanan/form.blade.php ENDPATH**/ ?>