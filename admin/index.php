<?php 
    // Importar la DB
    require '../includes/config/database.php';
    $db = conectarDB();

    // Query
    $query = "SELECT * FROM propiedades";

    // Consulta la DB
    $resultadoConsulta = mysqli_query($db, $query);

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

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
            <tr>
                <td> <?php echo $propiedad['id']; ?> </td>
                <td> <?php echo $propiedad['titulo']; ?> </td>
                <td> <img src="../imagenes/<?php echo $propiedad['imagen'] . ".jpg"; ?>" class="imagen-tabla"> </td>
                <td> <?php echo $propiedad['precio']; ?> </td>
                <td>
                    <a href="#" class="boton__rojo--block">Eliminar</a>
                    <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton__amarillo--block">Actualizar</a>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</main>

<?php 
    mysqli_close($db);
    incluirTemplate('footer');
?>