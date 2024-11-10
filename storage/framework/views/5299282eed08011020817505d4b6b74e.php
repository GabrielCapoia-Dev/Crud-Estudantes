

<?php $__env->startSection('title', 'Editar Sala'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Editar Sala</h2>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('salas.update', $sala->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome da Sala</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo e($sala->nome); ?>" required>
            </div>

            <button type="submit" class="btn btn-warning">Atualizar Sala</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gabri\Desktop\4 Semestre\Aulas\Alex\trabalho-crud-estudantes\estudantes\resources\views/salas/edit.blade.php ENDPATH**/ ?>