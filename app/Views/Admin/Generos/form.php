<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= isset($genero) ? 'Editar' : 'Crear' ?> Género</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body class="p-4 bg-light">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 600px;">
        
        <h2 class="mb-4"><?= isset($genero) ? 'Editar Género' : 'Nuevo Género' ?></h2>

        <form action="<?= isset($genero) ? base_url('admin/generos/actualizar/'.$genero->id_genero) : base_url('admin/generos/guardar') ?>" method="POST">
            
            <div class="form-group">
                <label>Nombre del Género</label>
                <input type="text" name="nombre_genero" class="form-control" required 
                       value="<?= isset($genero) ? $genero->nombre_genero : '' ?>">
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea name="descripcion_genero" class="form-control" rows="3"><?= isset($genero) ? $genero->descripcion_genero : '' ?></textarea>
            </div>

            <div class="form-group">
                <label>Estatus</label>
                <select name="estatus_genero" class="form-control" required>
                    <option value="1" <?= (isset($genero) && $genero->estatus_genero == 1) ? 'selected' : '' ?>>Habilitado</option>
                    <option value="-1" <?= (isset($genero) && $genero->estatus_genero == -1) ? 'selected' : '' ?>>Deshabilitado</option>
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?= base_url('admin/generos') ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>

    </div>
</body>
</html>