

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">


            <div class="row">
                <div class="">
                    <div class="card-header">Produklist</div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/produklist/create')); ?>" class="btn btn-success btn-sm" title="Add New produklist">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="<?php echo e(url('/admin/produklist')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Id Produk</th><th>Nama Produk</th><th>Harga</th><th>Deskripsi Produk</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $produklist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->id_produk); ?></td><td><?php echo e($item->nama_produk); ?></td><td><?php echo e($item->harga); ?></td><td><?php echo e($item->deskripsi_produk); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/admin/produklist/' . $item->id)); ?>" title="View produklist"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/admin/produklist/' . $item->id . '/edit')); ?>" title="Edit produklist"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="<?php echo e(url('/admin/produklist' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete produklist" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $produklist->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BAP\UAS\UAS\resources\views/admin/produklist/index.blade.php ENDPATH**/ ?>