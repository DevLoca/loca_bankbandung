


<?php $__env->startSection('content'); ?>

<div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Sitemap')); ?> </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Sitemap')); ?></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('Sitemap')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.sitemap.add')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-plus"></i> <?php echo e(__('Add Sitemap')); ?>

                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if(count($sitemaps) == 0): ?>
                                    <h3 class="text-center">NO SITEMAP FOUND</h3>
                                <?php else: ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped data_table">
                                        <thead>
                                            <tr>
                                            <th scope="col">File Name</th>
                                            <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $sitemaps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sitemap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($sitemap->filename); ?></td>
                                                <td>
                                                <form class="d-inline-block" action="<?php echo e(route('admin.sitemap.download', $sitemap->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="filename" value="<?php echo e($sitemap->filename); ?>">
                                                        <button type="submit" class="btn btn-info btn-sm">
                                                          <span class="btn-label">
                                                            <i class="fas fa-arrow-alt-circle-down"></i>
                                                          </span>
                                                          Download
                                                        </button>
                                                </form>
                                                <form  id="deleteform" class="d-inline-block" action="<?php echo e(route('admin.sitemap.delete', $sitemap->id )); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="id" value="<?php echo e($sitemap->id); ?>">
                                                        <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                                        </button>
                                                </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>
                              
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\bprbandung\core\resources\views/admin/settings/sitemap/sitemap.blade.php ENDPATH**/ ?>