

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">invoice <?php echo e($invoice->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/invoice')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/admin/invoice/' . $invoice->id . '/edit')); ?>" title="Edit invoice"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="<?php echo e(url('admin/invoice' . '/' . $invoice->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete invoice" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <a href="<?php echo e(url('admin/invoice/cetak_pdf' )); ?>" title="Print invoice"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                        <br/>
                        <br/>
                    

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($invoice->id); ?></td>
                                    </tr>
                                    <tr><th> Id Invoice </th>
                                        <td> <?php echo e($invoice->id_invoice); ?> </td>
                                    </tr>
                                    <tr><th> Nama Pengguna </th>
                                        <td> <?php echo e($invoice->nama_pengguna); ?> </td>
                                    </tr>
                                    <tr><th> Nama Produk </th>
                                        <td> <?php echo e($invoice->nama_produk); ?> </td>
                                    </tr>
                                    <tr><th> Jumlah Produk </th>
                                        <td> <?php echo e($invoice->jumlah_produk); ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BAP\UAS\UAS\resources\views/admin/invoice/show.blade.php ENDPATH**/ ?>