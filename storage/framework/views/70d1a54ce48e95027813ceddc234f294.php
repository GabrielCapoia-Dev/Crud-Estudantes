

<?php $__env->startSection('title', 'Cadastrar Estudante'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Cadastrar Estudante</h2>
    </div>
    <div class="card-body">
        <form id="formEstudante" action="<?php echo e(route('estudantes.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required maxlength="14" inputmode="numeric">
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
            </div>
            <div class="mb-3">
                <label for="sala_id" class="form-label">Sala</label>
                <select class="form-control" id="sala_id" name="sala_id" required>
                    <option value="">Selecione uma Sala</option>
                    <?php $__currentLoopData = $salas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sala): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($sala->id); ?>"><?php echo e($sala->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Estudante</button>
        </form>
    </div>
</div>

<script>
    function mascaraCPF(cpf) {
        cpf = cpf.replace(/\D/g, '')
        cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2')
        cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2')
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2')
        return cpf
    }

    document.getElementById('formEstudante').addEventListener('submit', function(event) {
        var salaSelect = document.getElementById('sala_id')
        if (salaSelect.value === "") {

            alert('Por favor, selecione uma sala para cadastrar o estudante.')
            event.preventDefault()
        }

        var cpfInput = document.getElementById('cpf')
        var cpf = cpfInput.value.replace(/\D/g, '')
        if (cpf.length !== 11) {
            alert('O CPF deve conter 11 dígitos numéricos.')
            event.preventDefault()
        } else {
        
            cpfInput.value = mascaraCPF(cpfInput.value)
        }
    })

    document.getElementById('cpf').addEventListener('input', function() {
        var cpf = this.value
        this.value = mascaraCPF(cpf)
    })

    document.getElementById('cpf').addEventListener('keypress', function(event) {
        if (!/[0-9]/.test(event.key)) {
            alert('Por favor, insira apenas números no campo CPF.')
            event.preventDefault()
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gabri\Desktop\4 Semestre\Aulas\Alex\trabalho-crud-estudantes\estudantes\resources\views/estudantes/create.blade.php ENDPATH**/ ?>