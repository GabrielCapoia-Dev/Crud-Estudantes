

<?php $__env->startSection('title', 'Detalhes do Estudante'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Detalhes do Estudante</h2>
    </div>
    <div class="card-body">
        <p><strong>Nome:</strong> <?php echo e($estudante->nome); ?></p>
        <p><strong>CPF:</strong> <?php echo e($estudante->cpf); ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo e(\Carbon\Carbon::parse($estudante->nascimento)->format('d/m/Y')); ?></p>
        <p><strong>Sala:</strong> <?php echo e($estudante->sala ? $estudante->sala->nome : 'Nenhuma Sala'); ?></p> <!-- Nome da Sala -->
        <a href="<?php echo e(route('estudantes.index')); ?>" class="btn btn-primary">Voltar</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gabri\Desktop\4 Semestre\Aulas\Alex\trabalho-crud-estudantes\estudantes\resources\views/estudantes/show.blade.php ENDPATH**/ ?>