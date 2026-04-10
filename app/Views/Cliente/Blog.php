<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Blockbuster</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/plyr.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
</head>
<style>
    :root {
    --bb-yellow: #ffd23f;
    --bb-blue: #0038a8;
    --bb-white: #ffffff;
}
    .subs-section {
    padding: 35px 0 90px;
    min-height: 100vh;
    background: linear-gradient(180deg, #0a0d2b 0%, #060816 60%, #04060d 100%);
}

.subs-header {
    margin-bottom: 48px;
}

.subs-kicker {
    display: inline-block;
    color: var(--bb-yellow);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.subs-header h2 {
    color: #fff;
    font-size: 40px;
    font-weight: 900;
    margin-bottom: 10px;
}

.subs-header p {
    color: #aebce3;
    font-size: 16px;
    max-width: 680px;
    margin: 0 auto;
}

.plans-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(300px, 1fr));
    gap: 24px;
    align-items: stretch;
}

.pricing-card {
    position: relative;
    background: linear-gradient(180deg, rgba(22, 30, 66, 0.98) 0%, rgba(12, 16, 40, 0.98) 100%);
    border-radius: 26px;
    overflow: hidden;
    min-height: 100%;
    border: 1px solid rgba(255,255,255,0.10);
    transition: all 0.35s ease;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.30);
}


.pricing-card:hover {
    transform: translateY(-12px) scale(1.015);
    box-shadow: 0 28px 55px rgba(0, 0, 0, 0.38);
    border-color: rgba(255, 210, 63, 0.32);
}
.featured-plan {
    border: 1px solid rgba(255, 210, 63, 0.55);
    background: linear-gradient(180deg, rgba(25, 30, 66, 0.99) 0%, rgba(12, 16, 40, 0.99) 100%);
    transform: translateY(-14px);
    box-shadow: 0 26px 60px rgba(0, 0, 0, 0.42);
}

.featured-plan:hover {
    transform: translateY(-18px);
}

.featured-badge {
    background: linear-gradient(135deg, #7c5cff, #5f3df2);
    color: #fff;
    text-align: center;
    font-size: 14px;
    font-weight: 900;
    padding: 12px 16px;
    letter-spacing: 0.6px;
}

.plan-discount {
    position: absolute;
    top: 20px;
    right: 18px;
    background: #efe9ff;
    color: #6b4cff;
    font-size: 14px;
    font-weight: 800;
    padding: 5px 12px;
    border-radius: 999px;
}

.pricing-card-body {
    padding: 28px 26px 26px;
}

.pricing-title {
    color: #ffffff;
    font-size: 24px;
    font-weight: 900;
    margin-bottom: 10px;
}

.pricing-desc {
    color: #d7e3ff;
    font-size: 15px;
    line-height: 1.5;
    min-height: 52px;
    margin-bottom: 24px;
}

.pricing-price-row {
    display: flex;
    align-items: flex-end;
    gap: 4px;
    margin-bottom: 8px;
}

.pricing-price {
    color: #ffffff;
    font-size: 50px;
    font-weight: 900;
    line-height: 1;
    text-shadow: 0 4px 18px rgba(0, 0, 0, 0.25);
}

.pricing-period {
    color: #d9e6ff;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 6px;
}

.pricing-extra {
    color: var(--bb-yellow);
    font-size: 18px;
    font-weight: 800;
    margin-bottom: 22px;
}

.pricing-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 52px;
    border-radius: 14px;
    font-size: 16px;
    font-weight: 900;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-bottom: 18px;
}

.pricing-btn-primary {
    background: linear-gradient(135deg, #6b4cff, #5b35ef);
    color: #fff;
    border: none;
}

.pricing-btn-primary:hover {
    color: #fff;
    transform: translateY(-2px);
}

.pricing-btn-secondary {
    background: rgba(255, 210, 63, 0.08);
    color: #ffffff;
    border: 1px solid rgba(255, 210, 63, 0.55);
}

.pricing-btn-secondary:hover {
    color: #6b4cff;
    background: #f3efff;
    transform: translateY(-2px);
}

.pricing-note {
    color: #b8c7eb;
    font-size: 14px;
    line-height: 1.45;
    margin-bottom: 18px;
}

.pricing-divider {
    width: 100%;
    height: 1px;
    background: rgba(255, 255, 255, 0.14);
    margin-bottom: 18px;
}
.pricing-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.pricing-features li {
    color: #eef4ff;
    font-size: 15px;
    line-height: 1.5;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 14px;
}

.pricing-features li i {
    color: #17b55b;
    margin-top: 3px;
    font-size: 14px;
}

@media (max-width: 1199px) {
    .plans-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .featured-plan {
        transform: translateY(0);
    }

    .featured-plan:hover {
        transform: translateY(-10px);
    }
}

@media (max-width: 767px) {
    .plans-grid {
        grid-template-columns: 1fr;
    }

    .subs-header h2 {
        font-size: 30px;
    }

    .pricing-price {
        font-size: 42px;
    }
}
.pricing-extra,
.pricing-content small,
.pricing-card small {
    color: #dbe7ff !important;
    opacity: 1;
    font-weight: 600;
}

.current-plan-card {
    border: 2px solid var(--bb-yellow);
    box-shadow: 0 0 0 1px rgba(255, 210, 63, 0.25),
                0 20px 50px rgba(0, 0, 0, 0.45);
}

.current-plan-badge {
    background: linear-gradient(135deg, var(--bb-yellow), #ffb300);
    color: #111;
    text-align: center;
    font-size: 12px;
    font-weight: 900;
    padding: 10px 14px;
    letter-spacing: 1px;
}


.modal-suscripcion {
    position: fixed;
    inset: 0;
    background: rgba(3, 8, 20, 0.85);
    backdrop-filter: blur(12px);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    padding: 20px;
}

.modal-suscripcion.active {
    display: flex;
}



.modal-suscripcion-box {
    width: 100%;
    max-width: 820px;
    background: linear-gradient(180deg, #0b1430, #060b1f);
    border-radius: 26px;
    border: 1px solid rgba(255,255,255,0.08);
    box-shadow: 0 30px 80px rgba(0,0,0,.65);
    overflow: hidden;
}



.modal-suscripcion-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 26px 30px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

.modal-suscripcion-header h3 {
    margin: 0;
    color: #fff;
    font-size: 22px;
    font-weight: 900;
}

.modal-suscripcion-header p {
    margin: 4px 0 0;
    color: #aebce3;
    font-size: 14px;
}



.modal-close-btn {
    width: 44px;
    height: 44px;
    border: none;
    border-radius: 12px;
    background: rgba(255,255,255,0.06);
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    transition: .25s ease;
}

.modal-close-btn:hover {
    background: rgba(255,255,255,0.12);
    transform: scale(1.05);
}


.modal-plan-selected {
    padding: 20px 30px 0;
    color: var(--bb-yellow);
    font-weight: 800;
    font-size: 15px;
}



.modal-form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
    padding: 20px 30px;
}

.modal-form-group.full-width {
    grid-column: 1 / -1;
}

.modal-form-group label {
    color: #dbe7ff;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 6px;
    display: block;
}

.modal-form-group input {
    width: 100%;
    height: 50px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.10);
    background: rgba(255,255,255,0.04);
    color: #fff;
    padding: 0 14px;
    outline: none;
    transition: .25s ease;
}

.modal-form-group input:focus {
    border-color: var(--bb-yellow);
    box-shadow: 0 0 0 2px rgba(255,210,63,0.2);
}

.modal-form-group input::placeholder {
    color: #8fa3d6;
}


.modal-actions {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    padding: 20px 30px 30px;
}

.modal-btn {
    min-width: 130px;
    height: 48px;
    border-radius: 12px;
    font-weight: 900;
    cursor: pointer;
    transition: .25s ease;
}


.modal-btn-cancel {
    background: rgba(255,255,255,0.06);
    color: #fff;
    border: 1px solid rgba(255,255,255,0.15);
}

.modal-btn-cancel:hover {
    background: rgba(255,255,255,0.12);
}


.modal-btn-save {
    background: linear-gradient(135deg, var(--bb-yellow), #ffb300);
    color: #111;
    border: none;
    box-shadow: 0 10px 25px rgba(255,210,63,0.35);
}

.modal-btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(255,210,63,0.45);
}
</style>
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
                        </a>
                    </div>
                </div>
                 <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= base_url('/') ?>">INICIO</a></li>
                                <li>
                                    <a href="<?= base_url('categorias') ?>">CATEGORIAS <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Comedia</a></li>
                                        <li><a href="#">Acción</a></li>
                                        <li><a href="#">Amor</a></li>

                                        <?php if (!session()->get('isLoggedIn')): ?>
                                            <li><a href="<?= base_url('signup') ?>">Sign Up</a></li>
                                            <li><a href="<?= base_url('login') ?>">Login</a></li>
                                        <?php else: ?>
                                            <li><a href="<?= base_url('perfil') ?>">Hola, <?= esc(session()->get('nombre')) ?></a></li>
                                            <li><a href="<?= base_url('logout') ?>">Cerrar sesión</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('blog') ?>">SUBSCRIPCIONES</a></li>
                               <?php if (session()->get('isLoggedIn')): ?>
                             <li><a href="<?= base_url('perfil') ?>">PERFIL</a></li>
                            <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                
               <div class="col-lg-2">
                   <div class="header__right" style="display: flex; align-items: center; gap: 15px;">
    <a href="#" class="search-switch"><span class="icon_search"></span></a>

    <?php if (session()->get('isLoggedIn')): ?>
        <span style="color: white; font-weight: 600; font-size: 14px; white-space: nowrap;">
            <?= esc(session()->get('nombre')) ?>
        </span>

        <a href="<?= base_url('logout') ?>" style="
            background: #e53637;
            color: white;
            padding: 6px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
        ">
            SALIR
        </a>
    <?php else: ?>
        <a href="<?= base_url('login') ?>">
            <span class="icon_profile"></span>
        </a>
    <?php endif; ?>
</div>
                </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
<section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/normal-breadcrumb.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Elige tu Subscripcion</h2>
                        <p>Escoge el plan que mejor se adapte a tu experiencia dentro de la plataforma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="subs-section">
    <div class="container">
        <div class="subs-header text-center">
            <p></p>
        </div>

        <div class="plans-grid">
            <?php foreach ($planes as $plan): ?>
                <?php
                    $tipoTexto = 'Desconocido';
                    if ($plan->tipo_plan == 8) $tipoTexto = 'Semanal';
                    if ($plan->tipo_plan == 16) $tipoTexto = 'Mensual';
                    if ($plan->tipo_plan == 32) $tipoTexto = 'Anual';

                    $destacado = strtolower(trim($plan->nombre_plan)) === 'premium';
                ?>
       
               <div class="pricing-card <?= $destacado ? 'featured-plan' : '' ?> <?= ($planActual && $planActual->id_plan == $plan->id_plan) ? 'current-plan-card' : '' ?>">
               <?php if ($planActual && $planActual->id_plan == $plan->id_plan): ?>
    
    <div class="current-plan-badge">TU PLAN ACTUAL</div>
<?php endif; ?>
                    <?php if ($destacado): ?>
                        <div class="featured-badge">MÁS POPULAR</div>
                    <?php endif; ?>

                   

                    <div class="pricing-card-body">
                        <h3 class="pricing-title"><?= esc($plan->nombre_plan) ?></h3>
                        <p class="pricing-desc">
                            <?= $destacado ? 'La experiencia más completa para disfrutar todo el contenido.' : 'Una opción ideal para disfrutar tus series y películas favoritas.' ?>
                        </p>

                        <div class="pricing-price-row">
                            <span class="pricing-price">$<?= esc($plan->precio_plan) ?></span>
                            <span class="pricing-period">/<?= strtolower($tipoTexto) ?></span>
                        </div>

                        <div class="pricing-extra">
                            <?= esc($plan->cantidad_limite_plan) ?> contenidos disponibles
                        </div>

                       <?php if (!session()->get('isLoggedIn')): ?>
    <a href="<?= base_url('login') ?>" class="pricing-btn pricing-btn-secondary">
        Iniciar sesión
    </a>
<?php else: ?>
    <button
        type="button"
        class="pricing-btn <?= ($planActual && $planActual->id_plan == $plan->id_plan) ? 'pricing-btn-primary' : 'pricing-btn-secondary' ?>"
        onclick="abrirModalPlan('<?= esc($plan->id_plan) ?>', '<?= esc($plan->nombre_plan) ?>')"
        <?= ($planActual && $planActual->id_plan == $plan->id_plan) ? 'disabled' : '' ?>
              >
         <?= ($planActual && $planActual->id_plan == $plan->id_plan) ? 'Plan actual' : 'Elegir plan' ?>
         </button>
                    <?php endif; ?>

                        <div class="pricing-note">
                            Tipo de plan: <?= esc($tipoTexto) ?>
                        </div>

                        <div class="pricing-divider"></div>

                        <ul class="pricing-features">
                            <li><i class="fa fa-check"></i> Acceso a contenido exclusivo</li>
                            <li><i class="fa fa-check"></i> Límite de <?= esc($plan->cantidad_limite_plan) ?> reproducciones</li>
                            <li><i class="fa fa-check"></i> Renovación tipo <?= strtolower($tipoTexto) ?></li>

                            <?php if ($destacado): ?>
                                <li><i class="fa fa-check"></i> Prioridad en contenido premium</li>
                            <?php else: ?>
                                <li><i class="fa fa-check"></i> Experiencia Blockbuster asegurada</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if (session()->get('isLoggedIn')): ?>
<div id="modalSuscripcion" class="modal-suscripcion">
    <div class="modal-suscripcion-box">
        <div class="modal-suscripcion-header">
            <div>
                <h3>Solicitar cambio de suscripción</h3>
                <p>Completa los datos para enviar tu solicitud al operador.</p>
            </div>
            <button type="button" class="modal-close-btn" onclick="cerrarModalPlan()">
                <i class="fa fa-times"></i>
            </button>
        </div>

        <form action="<?= base_url('suscripciones/solicitar') ?>" method="post">
            <input type="hidden" name="id_plan_solicitado" id="modal_id_plan">

            <div class="modal-plan-selected">
                Plan solicitado: <strong id="modal_nombre_plan">-</strong>
            </div>

            <div class="modal-form-grid">
             <div class="modal-form-group full-width">
    <label>Nombre del titular</label>
    <input
        type="text"
        id="nombre_tarjeta"
        name="nombre_tarjeta"
        placeholder="Nombre como aparece en la tarjeta"
        autocomplete="cc-name"
        required
    >
</div>

<div class="modal-form-group full-width">
    <label>Número de tarjeta</label>
    <input
        type="text"
        id="numero_tarjeta"
        name="numero_tarjeta"
        placeholder="1234-5678-9012-3456"
        inputmode="numeric"
        maxlength="19"
        autocomplete="cc-number"
        required
    >
</div>

<div class="modal-form-group">
    <label>Vencimiento</label>
    <input
        type="text"
        id="vencimiento_tarjeta"
        name="vencimiento_tarjeta"
        placeholder="MM/YY"
        inputmode="numeric"
        maxlength="5"
        autocomplete="cc-exp"
        required>
</div>

<div class="modal-form-group">
    <label>CVV</label>
    <input
        type="password"
        id="cvv_tarjeta"
        name="cvv_tarjeta"
        placeholder="***"
        inputmode="numeric"
        maxlength="3"
        autocomplete="cc-csc"
        required
    >
</div>
            </div>

            <div class="modal-actions">
                <button type="button" class="modal-btn modal-btn-cancel" onclick="cerrarModalPlan()">Cancelar</button>
                <button type="submit" class="modal-btn modal-btn-save">Enviar solicitud</button>
            </div>
        </form>
    </div>
</div>
<?php endif; ?>
<script>
    function abrirModalPlan(idPlan, nombrePlan) {
        const modal = document.getElementById('modalSuscripcion');
        const inputPlan = document.getElementById('modal_id_plan');
        const nombrePlanText = document.getElementById('modal_nombre_plan');

        if (modal && inputPlan && nombrePlanText) {
            inputPlan.value = idPlan;
            nombrePlanText.textContent = nombrePlan;
            modal.classList.add('active');
        }
    }

    function cerrarModalPlan() {
        const modal = document.getElementById('modalSuscripcion');
        if (modal) {
            modal.classList.remove('active');
        }
    }

    function abrirModalPlan(idPlan, nombrePlan) {
        const modal = document.getElementById('modalSuscripcion');
        const inputPlan = document.getElementById('modal_id_plan');
        const nombrePlanText = document.getElementById('modal_nombre_plan');

        if (modal && inputPlan && nombrePlanText) {
            inputPlan.value = idPlan;
            nombrePlanText.textContent = nombrePlan;
            modal.classList.add('active');
        }
    }

    function cerrarModalPlan() {
        const modal = document.getElementById('modalSuscripcion');
        if (modal) {
            modal.classList.remove('active');
        }
    }

    const nombreTitularInput = document.getElementById('nombre_tarjeta');
    const numeroTarjetaInput = document.getElementById('numero_tarjeta');
    const vencimientoInput = document.getElementById('vencimiento_tarjeta');
    const cvvInput = document.getElementById('cvv_tarjeta');

    if (nombreTitularInput) {
        nombreTitularInput.addEventListener('input', function () {
            this.value = this.value
                .replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '')
                .replace(/\s{2,}/g, ' ');
        });
    }

    if (numeroTarjetaInput) {
        numeroTarjetaInput.addEventListener('input', function () {
            let valor = this.value.replace(/\D/g, '').substring(0, 16);
            let partes = valor.match(/.{1,4}/g);
            this.value = partes ? partes.join('-') : '';
        });
    }

    if (vencimientoInput) {
        vencimientoInput.addEventListener('input', function () {
            let valor = this.value.replace(/\D/g, '').substring(0, 4);

            if (valor.length >= 3) {
                this.value = valor.substring(0, 2) + '/' + valor.substring(2);
            } else {
                this.value = valor;
            }
        });
    }

    if (cvvInput) {
        cvvInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').substring(0, 3);
        });
    }

    const formSuscripcion = document.querySelector('#modalSuscripcion form');

    if (formSuscripcion) {
        formSuscripcion.addEventListener('submit', function (e) {
            const nombre = nombreTitularInput ? nombreTitularInput.value.trim() : '';
            const numero = numeroTarjetaInput ? numeroTarjetaInput.value.trim() : '';
            const vencimiento = vencimientoInput ? vencimientoInput.value.trim() : '';
            const cvv = cvvInput ? cvvInput.value.trim() : '';

            const regexNombre = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
            const regexTarjeta = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
            const regexVencimiento = /^(0[1-9]|1[0-2])\/\d{2}$/;
            const regexCvv = /^\d{3}$/;

            if (!regexNombre.test(nombre)) {
                e.preventDefault();
                alert('El nombre del titular solo debe contener letras y espacios.');
                nombreTitularInput.focus();
                return;
            }

            if (!regexTarjeta.test(numero)) {
                e.preventDefault();
                alert('El número de tarjeta debe tener 16 dígitos en formato 1234-5678-9012-3456.');
                numeroTarjetaInput.focus();
                return;
            }

            if (!regexVencimiento.test(vencimiento)) {
                e.preventDefault();
                alert('El vencimiento debe tener formato MM/YY. Ejemplo: 02/27');
                vencimientoInput.focus();
                return;
            }

            if (!regexCvv.test(cvv)) {
                e.preventDefault();
                alert('El CVV debe contener exactamente 3 dígitos.');
                cvvInput.focus();
                return;
            }
        });
    }

</script>
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li><a href="<?= base_url('/') ?>">INICIO</a></li>
                            <li><a href="<?= base_url('categorias') ?>">CATEGORIAS</a></li>
                            <li class="active"><a href="<?= base_url('blog') ?>">SUBSCRIPCIONES</a></li>
                           <?php if (session()->get('isLoggedIn')): ?>
                             <li><a href="<?= base_url('perfil') ?>">PERFIL</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                  
                </div>
            </div>
        </div>
    </footer>

    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/player.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/mixitup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>