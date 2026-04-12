<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= isset($plan) ? 'Editar' : 'Crear' ?> Plan | Admin Blockbuster</title>
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
                <h3 class="mb-0 mt-2" style="font-family: 'Oswald', sans-serif; color: white;"><?= isset($plan) ? 'Editar Plan' : 'Nuevo Plan' ?></h3>
            </div>
            <div class="card-body p-4 dark-form">
                
                <form action="<?= isset($plan) ? base_url('admin/planes/actualizar/'.$plan->id_plan) : base_url('admin/planes/guardar') ?>" method="POST">
                    
                    <div class="form-group">
                        <label>Nombre del Plan</label>
                        <input type="text" name="nombre_plan" class="form-control dark-input" required value="<?= isset($plan) ? $plan->nombre_plan : '' ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Precio ($)</label>
                            <input type="number" step="0.01" name="precio_plan" class="form-control dark-input" required value="<?= isset($plan) ? $plan->precio_plan : '' ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Límite de Peliculas</label>
                            <input type="number" name="cantidad_limite_plan" class="form-control dark-input" required value="<?= isset($plan) ? $plan->cantidad_limite_plan : '' ?>">
                        </div>
                    </div>

                    <div class="form-group">
    <label>Duración del Plan</label>
    <select name="tipo_plan" class="form-control dark-input d-block" required>
        <option value="">Selecciona una opción</option>
        <option value="8" <?= (isset($plan) && $plan->tipo_plan == 8) ? 'selected' : '' ?>>Semanal</option>
        <option value="16" <?= (isset($plan) && $plan->tipo_plan == 16) ? 'selected' : '' ?>>Mensual</option>
        <option value="32" <?= (isset($plan) && $plan->tipo_plan == 32) ? 'selected' : '' ?>>Anual</option>
    </select>
    <small style="color: #b7b7b7;">Selecciona una duración.</small>
</div>

                    <div class="form-group">
                        <label>Estatus</label>
                        <select name="estatus_plan" class="form-control dark-input d-block" required>
                            <option value="1" <?= (isset($plan) && $plan->estatus_plan == 1) ? 'selected' : '' ?>>Activo</option>
                            <option value="-1" <?= (isset($plan) && $plan->estatus_plan == -1) ? 'selected' : '' ?>>Inactivo</option>
                        </select>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success" style="background-color: #1ed760; border: none; font-weight: bold; padding: 10px 30px;">Guardar</button>
                        <a href="<?= base_url('admin/planes') ?>" class="btn btn-secondary ml-2" style="background-color: #333; border: none; padding: 10px 30px; color: white;">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>