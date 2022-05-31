<?php 
    $mensaje = $_GET['resultado'] ?? null;
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if($mensaje == 1) : ?>
        <p class="alerta exito">Anuncio creado exitosamente</p>
    <?php endif ?>

    <a href="/admin/propiedades/crear.php" class="boton boton__verde">Nueva Propiedad</a>
</main>

<?php incluirTemplate('footer');?>