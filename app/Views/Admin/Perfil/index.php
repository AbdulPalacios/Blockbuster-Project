<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil | Admin Blockbuster</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
    <style>
        .dark-form label { color: #b7b7b7; font-weight: 600; }
        .dark-input { background-color: #0b0c2a; color: white; border: 1px solid #333; }
        .dark-input:focus { background-color: #1a1e27; color: white; border-color: #e53637; box-shadow: none; }
    </style>
</head>
<body style="background-color: #0b0c2a; min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    
    <div class="container" style="max-width: 600px;">
        <div class="card shadow-lg" style="background-color: #1a1e27; border: 1px solid #333; border-radius: 10px;">
            <div class="card-header text-center" style="background-color: #e53637; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <h3 class="mb-0 mt-2" style="font-family: 'Oswald', sans-serif; color: white;">Mi Perfil</h3>
            </div>
            <div class="card-body p-4 dark-form">
                
                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger text-center" style="background-color: #e53637; color: white; border: none; font-weight: 600;">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                
                <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success text-center" style="background-color: #1ed760; color: #000; border: none; font-weight: bold;">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('admin/perfil/actualizar') ?>" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Nombre Completo</label>
                        <?php $nombreActual = trim($admin->nombre_usuario . ' ' . $admin->ap_usuario . ' ' . $admin->am_usuario); ?>
                        <input type="text" name="nombre" class="form-control dark-input" required 
                               value="<?= esc($nombreActual) ?>">
                    </div>

                    <div class="form-group">
                        <label>Correo Electrónico</label>
                        <input type="email" name="email" class="form-control dark-input" required 
                               value="<?= esc($admin->email_usuario) ?>">
                    </div>

                    <div class="form-group text-center mb-4">
                        <label class="d-block">Foto de Perfil Actual</label>
                        <?php $fotoPerfil = session()->get('imagen_usuario') ? base_url('uploads/perfiles/'.session()->get('imagen_usuario')) : base_url('assets/img/default-avatar.png'); ?>
                        <img src="<?= $fotoPerfil ?>" alt="Perfil" style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid #e53637; object-fit: cover; margin-bottom: 10px;">
                        
                        <input type="file" name="foto_perfil" class="form-control dark-input mt-2" accept="image/*" style="padding: 4px;">
                        <small style="color: #b7b7b7;">Formatos: JPG, PNG. (Opcional)</small>
                    </div>

                    <hr style="border-color: #333; margin: 30px 0;">
                    <h5 style="color: #b7b7b7; text-align: center; margin-bottom: 20px; font-family: 'Oswald', sans-serif;">Cambiar Contraseña (Opcional)</h5>

                    <div class="form-group">
                        <label>Nueva Contraseña</label>
                        <input type="password" name="password" class="form-control dark-input" placeholder="Deja en blanco si no quieres cambiarla">
                    </div>

                    <div class="form-group">
                        <label>Confirmar Nueva Contraseña</label>
                        <input type="password" name="password_confirm" class="form-control dark-input" placeholder="Repite la contraseña">
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success" style="background-color: #1ed760; border: none; font-weight: bold; padding: 10px 30px;">Actualizar</button>
                        <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary ml-2" style="background-color: #333; border: none; padding: 10px 30px; color: white;">Regresar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>