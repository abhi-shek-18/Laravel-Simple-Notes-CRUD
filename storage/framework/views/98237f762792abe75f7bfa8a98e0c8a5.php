

<?php $__env->startSection('content'); ?>
<div class="card mt-5">
    <h2 class="card-header">Notes Container</h2>
    <div class="card-body">

    <?php if(session('success')): ?>
        <div class="alert alert-sucess" role="alert"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="<?php echo e(route('notes.create')); ?>"><i class="fa fa-plus"></i> Create New Note</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Title</th>
                    <th>content</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($note->id); ?></td>
                        <td><?php echo e($note->title); ?></td>
                        <td><?php echo e($note->content); ?></td>
                        <td>
                            <form action="<?php echo e(route('notes.destroy',$note->id)); ?>" method="POST">
                                <a class="btn btn-info btn-sm" href="<?php echo e(route('notes.show',$note->id)); ?>"><i class="fa-solid fa-list"></i> Show</a>
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('notes.edit',$note->id)); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <?php echo $notes->links(); ?>


    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('notes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my_Projects\notes-crud\resources\views/notes/index.blade.php ENDPATH**/ ?>