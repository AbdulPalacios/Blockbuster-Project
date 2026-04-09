<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Géneros</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body class="p-4 bg-light">
    <div class="container bg-white p-4 rounded shadow-sm">
        
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista de Géneros</h2>
            <div>
                <a href="<?= base_url('admin/generos/crear') ?>" class="btn btn-primary">Nuevo Género</a>
                <a href="<?= base_url('logout') ?>" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($generos as $g): ?>
                <tr>
                    <td><?= $g->id_genero ?></td>
                    <td><?= $g->nombre_genero ?></td>
                    <td><?= $g->descripcion_genero ?></td>
                    <td>
                        <?php if($g->estatus_genero == 1): ?>
                            <span class="badge badge-success">Habilitado</span>
                        <?php else: ?>
                            <span class="badge badge-secondary">Deshabilitado</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/generos/editar/'.$g->id_genero) ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="<?= base_url('admin/generos/eliminar/'.$g->id_genero) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este género?');">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>