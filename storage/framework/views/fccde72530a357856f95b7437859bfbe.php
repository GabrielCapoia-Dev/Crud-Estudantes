

<?php $__env->startSection('title', 'Lista de Salas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center">Salas</h2>
        </div>
        <div class="card-body">
            <!-- Botão para Adicionar Nova Sala -->
            <a href="<?php echo e(route('salas.create')); ?>" class="btn btn-success mb-3">Adicionar Sala</a>

            <!-- Tabela de Salas -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $salas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sala): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($sala->id); ?></th>
                            <td><?php echo e($sala->nome); ?></td>
                            <td>
                                <!-- Botões para Ações -->
                                <a href="<?php echo e(route('salas.edit', $sala->id)); ?>" class="btn btn-warning btn-sm">Editar</a>

                                <!-- Formulário para Deletar -->
                                <form action="<?php echo e(route('salas.destroy', $sala->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gabri\Desktop\4 Semestre\Aulas\Alex\trabalho-crud-estudantes\estudantes\resources\views/salas/index.blade.php ENDPATH**/ ?>