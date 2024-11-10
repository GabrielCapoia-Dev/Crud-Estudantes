

<?php $__env->startSection('title', 'Lista de Estudantes'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Lista de Estudantes</h2>
    </div>
    <div class="card-body">

        <!-- Verifica se existem salas cadastradas -->
        <?php if($salas->isEmpty()): ?>
        <!-- Modal de alerta -->
        <div class="alert alert-warning">
            <strong>Atenção!</strong> Não há salas cadastradas. Você precisa cadastrar uma sala primeiro.
            <a href="<?php echo e(route('salas.create')); ?>" class="btn btn-warning btn-sm mt-2">Cadastrar Sala</a>
        </div>
        <?php else: ?>
        <a href="<?php echo e(route('estudantes.create')); ?>" class="btn btn-success mb-3">Adicionar Estudante</a>
        <?php endif; ?>

        <!-- Listagem de Estudantes -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Sala</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $estudantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($estudante->nome); ?></td>
                    <td><?php echo e($estudante->cpf); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($estudante->nascimento)->format('d/m/Y')); ?></td>
                    <td><?php echo e($estudante->sala ? $estudante->sala->nome : 'Nenhuma Sala'); ?></td>
                    <td>
                        <a href="<?php echo e(route('estudantes.show', $estudante->id)); ?>" class="btn btn-info">Ver</a>
                        <a href="<?php echo e(route('estudantes.edit', $estudante->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('estudantes.destroy', $estudante->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    if (isEmpty($salas))
        alert('Não há salas cadastradas! Você precisa cadastrar uma sala primeiro.');
    endif
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gabri\Desktop\4 Semestre\Aulas\Alex\trabalho-crud-estudantes\estudantes\resources\views/estudantes/index.blade.php ENDPATH**/ ?>