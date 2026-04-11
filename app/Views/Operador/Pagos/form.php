<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= isset($streaming) ? 'Editar' : 'Crear' ?> Título | Admin Blockbuster</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        .dark-form label { color: #b7b7b7; font-weight: 600; font-size: 14px; margin-bottom: 4px; }
        .dark-input { background-color: #0b0c2a; color: white; border: 1px solid #333; }
        .dark-input:focus { background-color: #1a1e27; color: white; border-color: #e53637; box-shadow: none; }
        input[type="file"]::file-selector-button { background-color: #e53637; color: white; border: none; padding: 5px 15px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body style="background-color: #0b0c2a; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 40px 0;">
    
    <div class="container" style="max-width: 800px;">
        <div class="card shadow-lg" style="background-color: #1a1e27; border: 1px solid #333; border-radius: 10px;">
            <div class="card-header text-center" style="background-color: #e53637; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <h3 class="mb-0 mt-2" style="font-family: 'Oswald', sans-serif; color: white;"><?= isset($streaming) ? 'Editar Título' : 'Nuevo Título' ?></h3>
            </div>
            <div class="card-body p-4 dark-form">
                
                <form action="<?= isset($streaming) ? base_url('admin/streaming/actualizar/'.$streaming->id_streaming) : base_url('admin/streaming/guardar') ?>" method="POST" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label>Nombre del Contenido (Película/Serie)</label>
                            <input type="text" name="nombre_streaming" class="form-control dark-input" required value="<?= isset($streaming) ? $streaming->nombre_streaming : '' ?>">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Género Principal</label>
                            <select name="id_genero" class="form-control dark-input d-block" required>
                                <option value="">Selecciona...</option>
                                <?php foreach($generos as $g): ?>
                                    <option value="<?= $g->id_genero ?>" <?= (isset($streaming) && $streaming->id_genero == $g->id_genero) ? 'selected' : '' ?>>
                                        <?= $g->nombre_genero ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Sinopsis</label>
                        <textarea name="sipnosis_streaming" class="form-control dark-input" rows="3" required><?= isset($streaming) ? $streaming->sipnosis_streaming : '' ?></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Clasificación (Ej. +18, PG-13)</label>
                            <input type="text" name="clasificacion_streaming" class="form-control dark-input" required value="<?= isset($streaming) ? $streaming->clasificacion_streaming : '' ?>">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Duración (Ej. 120 min)</label>
                            <input type="text" name="duracion_streaming" class="form-control dark-input" value="<?= isset($streaming) ? $streaming->duracion_streaming : '' ?>">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Temporadas (Dejar 0 si es Película)</label>
                            <input type="number" name="temporadas_streaming" class="form-control dark-input" value="<?= isset($streaming) ? $streaming->temporadas_streaming : '0' ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Fecha de Lanzamiento (Original)</label>
                            <input type="date" name="fecha_lanzamiento_streaming" class="form-control dark-input" required value="<?= isset($streaming) ? $streaming->fecha_lanzamiento_streaming : '' ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Fecha de Estreno en Plataforma</label>
                            <input type="date" name="fecha_estreno_streaming" class="form-control dark-input" required value="<?= isset($streaming) ? $streaming->fecha_estreno_streaming : '' ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>URL del Tráiler (YouTube)</label>
                        <input type="url" name="trailer_streaming" class="form-control dark-input" placeholder="https://www.youtube.com/watch?v=..." value="<?= isset($streaming) ? $streaming->trailer_streaming : '' ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label>Carátula / Portada (Recomendado: JPG/PNG vertical)</label>
                            <input type="file" name="caratula_streaming" class="form-control dark-input" accept="image/*" <?= isset($streaming) ? '' : 'required' ?>>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Estatus</label>
                            <select name="estatus_streaming" class="form-control dark-input d-block" required>
                                <option value="1" <?= (isset($streaming) && $streaming->estatus_streaming == 1) ? 'selected' : '' ?>>Público</option>
                                <option value="-1" <?= (isset($streaming) && $streaming->estatus_streaming == -1) ? 'selected' : '' ?>>Oculto</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success" style="background-color: #1ed760; border: none; font-weight: bold; padding: 10px 40px;">Guardar Título</button>
                        <a href="<?= base_url('admin/streaming') ?>" class="btn btn-secondary ml-2" style="background-color: #333; border: none; padding: 10px 40px; color: white;">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>