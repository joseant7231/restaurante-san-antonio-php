<?php
require_once __DIR__ . '/includes/funciones.php';
$titulo = 'Inicio';
$platos = todos('SELECT * FROM Plato WHERE disponible = 1 ORDER BY FIELD(tipo, "entrada", "segundo", "bebida"), nombre');
include __DIR__ . '/includes/header.php';
?>
<section class="hero mb-5">
    <p class="text-warning fw-bold">DE LIMA, PERÚ</p>
    <h1>Restaurante San Antonio</h1>
    <p class="fs-5">Sabores que cuentan nuestra historia.</p>
    <p>Comida peruana auténtica, preparada con cariño.</p>
    <a class="btn btn-oro" href="<?= h(ruta(cliente_id() ? 'pedido.php' : 'registro.php')) ?>">
        <?= cliente_id() ? 'Hacer un pedido' : 'Crear cuenta para pedir' ?>
    </a>
    <a class="btn btn-outline-light ms-2" href="#carta">Ver carta</a>
</section>
<h2 id="carta" class="pagina-titulo">Nuestra carta</h2>
<div class="row g-4">
    <?php foreach ($platos as $plato): ?>
    <div class="col-sm-6 col-lg-4">
        <div class="card h-100 tarjeta overflow-hidden">
            <?php if ($plato['imagen']): ?>
                <img class="plato-imagen" src="<?= h(ruta($plato['imagen'])) ?>" alt="<?= h($plato['nombre']) ?>">
            <?php else: ?><div class="placeholder-plato">🍽️</div><?php endif; ?>
            <div class="card-body">
                <span class="badge text-bg-light mb-2"><?= h(ucfirst($plato['tipo'])) ?></span>
                <h5 class="card-title"><?= h($plato['nombre']) ?></h5>
                <p class="precio mb-2"><?= dinero($plato['precio']) ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
