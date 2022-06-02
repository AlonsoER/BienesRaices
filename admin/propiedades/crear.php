<?php
// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// Consultar vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Arreglo errores
$errores = [];

$titulo = '';
$precio = '';
$descipcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';
$creado = date('Y/m/d');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descipcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);

    // Asignar files hacia una variable
    $imagen = $_FILES['imagen'];
    var_dump($imagen);


    if (!$titulo) {
        $errores[] = "Debes agregar un titulo";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if (strlen($descipcion) < 50) {
        $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "La cantidad de habitaciones es obligatoria";
    }
    if (!$wc) {
        $errores[] = "La cantidad de wc es obligatoria";
    }
    if (!$estacionamiento) {
        $errores[] = "La cantidad de estacionamientos es obligatoria";
    }
    if (!$vendedorId) {
        $errores[] = "El vendedor es obligatorio";
    }
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "La imagen es obligatoria";
    }

    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    // Validar que le array de errores este vacio
    if (empty($errores)) {
        // Subida de archivos

        // Crear carpeta
        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        // Generar un nombre unico
        $nombreImagen = md5(uniqid(rand(), true));

        // Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes .  $nombreImagen . ".jpg");

        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId)
            VALUES ( '$titulo', '$precio', '$nombreImagen', '$descipcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId' );";

        // echo $query;
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            header('Location: /admin?resultado=1');
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton__verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información Géneral</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio: </label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripción: </label>
            <textarea id="descripcion" name="descripcion" value="<?php echo $descipcion; ?>"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones: </label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños: </label>
            <input type="number" id="wc" placeholder="Ej. 3" name="wc" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamientos">Estacionamientos: </label>
            <input type="number" id="estacionamientos" placeholder="Ej. 3" name="estacionamiento" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor" id="">
                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorId === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] . " " . $row['apellidos']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton__verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>