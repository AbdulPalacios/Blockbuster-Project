<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= isset($usuario) ? 'Editar' : 'Crear' ?> Usuario | Admin Blockbuster</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        .dark-form label { color: #b7b7b7; font-weight: 600; }
        .dark-input { background-color: #0b0c2a; color: white; border: 1px solid #333; }
        .dark-input:focus { background-color: #1a1e27; color: white; border-color: #e53637; box-shadow: none; }
    </style>
</head>
<body style="background-color: #0b0c2a; min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    
    <div class="container" style="max-width: 650px;">
        <div class="card shadow-lg" style="background-color: #1a1e27; border: 1px solid #333; border-radius: 10px;">
            <div class="card-header text-center" style="background-color: #e53637; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <h3 class="mb-0 mt-2" style="font-family: 'Oswald', sans-serif; color: white;"><?= isset($usuario) ? 'Editar Usuario' : 'Nuevo Usuario' ?></h3>
            </div>
            <div class="card-body p-4 dark-form">
                
                <form action="<?= isset($usuario) ? base_url('admin/usuarios/actualizar/'.$usuario->id_usuario) : base_url('admin/usuarios/guardar') ?>" method="POST">
                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nombre(s)</label>
                            <input type="text" name="nombre_usuario" class="form-control dark-input" required value="<?= isset($usuario) ? $usuario->nombre_usuario : '' ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Apellidos</label>
                            <input type="text" name="ap_usuario" class="form-control dark-input" required value="<?= isset($usuario) ? $usuario->ap_usuario : '' ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Correo Electrónico (Para Iniciar Sesión)</label>
                        <input type="email" name="email_usuario" class="form-control dark-input" required value="<?= isset($usuario) ? $usuario->email_usuario : '' ?>">
                    </div>

                    <div class="form-group">
                        <label>Contraseña <?= isset($usuario) ? '<small style="color:#e53637;">(Déjalo en blanco si no deseas cambiarla)</small>' : '' ?></label>
                        <input type="password" name="password_usuario" class="form-control dark-input" <?= isset($usuario) ? '' : 'required' ?>>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Rol en el Sistema</label>
                            <select name="id_rol" class="form-control dark-input d-block" required>
                                <option value="58" <?= (isset($usuario) && $usuario->id_rol == 58) ? 'selected' : '' ?>>Cliente (58)</option>
                                <option value="125" <?= (isset($usuario) && $usuario->id_rol == 125) ? 'selected' : '' ?>>Operador (125)</option>
                                <option value="745" <?= (isset($usuario) && $usuario->id_rol == 745) ? 'selected' : '' ?>>Administrador (745)</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Estatus</label>
                            <select name="estatus_usuario" class="form-control dark-input d-block" required>
                                <option value="1" <?= (isset($usuario) && $usuario->estatus_usuario == 1) ? 'selected' : '' ?>>Activo (Permitir Acceso)</option>
                                <option value="-1" <?= (isset($usuario) && $usuario->estatus_usuario == -1) ? 'selected' : '' ?>>Inactivo (Bloquear)</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success" style="background-color: #1ed760; border: none; font-weight: bold; padding: 10px 30px;">Guardar</button>
                        <a href="<?= base_url('admin/usuarios') ?>" class="btn btn-secondary ml-2" style="background-color: #333; border: none; padding: 10px 30px; color: white;">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>