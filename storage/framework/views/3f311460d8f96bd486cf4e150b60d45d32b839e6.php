<div class="form-group <?php echo e($errors->has('id_pengguna') ? 'has-error' : ''); ?>">
    <label for="id_pengguna" class="control-label"><?php echo e('Id Pengguna'); ?></label>
    <input class="form-control" name="id_pengguna" type="number" id="id_pengguna" value="<?php echo e(isset($pengguna->id_pengguna) ? $pengguna->id_pengguna : ''); ?>" >
    <?php echo $errors->first('id_pengguna', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
    <label for="username" class="control-label"><?php echo e('Username'); ?></label>
    <input class="form-control" name="username" type="text" id="username" value="<?php echo e(isset($pengguna->username) ? $pengguna->username : ''); ?>" >
    <?php echo $errors->first('username', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
    <label for="nama" class="control-label"><?php echo e('Nama'); ?></label>
    <input class="form-control" name="nama" type="text" id="nama" value="<?php echo e(isset($pengguna->nama) ? $pengguna->nama : ''); ?>" >
    <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH C:\BAP\UAS\UAS\resources\views/admin/pengguna/form.blade.php ENDPATH**/ ?>