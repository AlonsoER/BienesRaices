<?php
// Importar la DB
require '../includes/config/database.php';
$db = conectarDB();

// Query
$query = "SELECT * FROM propiedades";

// Consulta la DB
$resultadoConsulta = mysqli_query($db, $query);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){
        $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);
        unlink('../imagenes'.'/'.$propiedad['imagen'].'.jpg');

        $query = "DELETE FROM propiedades WHERE id = ${id}";
        echo $query;

        $resultado = mysqli_query($db, $query);
        if($resultado){
            header('location: /admin?resultado=3');
        }
    }
}

$mensaje = $_GET['resultado'] ?? null;
require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if ($mensaje == 1) : ?>
        <p class="alerta exito">Anuncio Creado Exitosamente</p>
    <?php elseif ($mensaje == 2) : ?>
        <p class="alerta exito">Anuncio Actualizado Exitosamente</p>
    <?php elseif ($mensaje == 3) : ?>
        <p class="alerta exito">Anuncio Eliminado Exitosamente</p>
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
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td> <img src="../imagenes/<?php echo $propiedad['imagen'] . ".jpg"; ?>" class="imagen-tabla"> </td>
                    <td> <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton__rojo--block" value="Eliminar">
                        </form>
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