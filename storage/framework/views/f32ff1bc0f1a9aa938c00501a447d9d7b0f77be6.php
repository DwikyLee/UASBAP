<div class="form-group <?php echo e($errors->has('id_produk') ? 'has-error' : ''); ?>">
    <label for="id_produk" class="control-label"><?php echo e('Id Produk'); ?></label>
    <input class="form-control" name="id_produk" type="number" id="id_produk" value="<?php echo e(isset($stokproduk->id_produk) ? $stokproduk->id_produk : ''); ?>" >
    <?php echo $errors->first('id_produk', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('nama_produk') ? 'has-error' : ''); ?>">
    <label for="nama_produk" class="control-label"><?php echo e('Nama Produk'); ?></label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="<?php echo e(isset($stokproduk->nama_produk) ? $stokproduk->nama_produk : ''); ?>" >
    <?php echo $errors->first('nama_produk', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('stok_produk') ? 'has-error' : ''); ?>">
    <label for="stok_produk" class="control-label"><?php echo e('Stok Produk'); ?></label>
    <input class="form-control" name="stok_produk" type="number" id="stok_produk" value="<?php echo e(isset($stokproduk->stok_produk) ? $stokproduk->stok_produk : ''); ?>" >
    <?php echo $errors->first('stok_produk', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH C:\BAP\UAS\UAS\resources\views/admin/stokproduk/form.blade.php ENDPATH**/ ?>