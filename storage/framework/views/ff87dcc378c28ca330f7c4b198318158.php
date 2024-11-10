<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Crud Estudante'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 1rem 0;
        }
        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>Crud Estudante</h1>
        </div>
    </header>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li style="margin: 10px;" class="nav-item btn btn-info btn-sm">
                        <a style="color: #343a40;" class="nav-link" href="<?php echo e(route('salas.index')); ?>">Cadastro de Salas</a>
                    </li>
                    <li style="margin: 10px;" class="nav-item btn btn-info btn-sm">
                        <a style="color: #343a40;" class="nav-link" href="<?php echo e(route('estudantes.index')); ?>">Cadastro de Estudantes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH C:\Users\gabri\Desktop\4 Semestre\Aulas\Alex\trabalho-crud-estudantes\estudantes\resources\views/layouts/app.blade.php ENDPATH**/ ?>