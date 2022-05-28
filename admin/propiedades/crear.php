<?php 
    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Arreglo errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descipcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descipcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

        if(!$titulo){
            $errores[] = "Debes agregar un titulo";
        }
        if(!$precio){
            $errores[] = "El precio es obligatorio";
        }
        if(strlen($descipcion) < 50 ){
            $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }
        if(!$habitaciones){
            $errores[] = "La cantidad de habitaciones es obligatoria";
        }
        if(!$wc){
            $errores[] = "La cantidad de wc es obligatoria";
        }
        if(!$estacionamiento){
            $errores[] = "La cantidad de estacionamientos es obligatoria";
        }
        if(!$vendedorId){
            $errores[] = "El vendedor es obligatorio";
        }

        // Validar que le array de errores este vacio
        if(empty($errores)){
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId)
            VALUES ( '$titulo', '$precio', '$descipcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId' );";

            // echo $query;
            $resultado = mysqli_query($db, $query);
            if($resultado){
            echo 'Propiedad creada exitosamente';
            }
        }
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton__verde">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información Géneral</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio: </label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

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
                <option value="1">Alonso</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton__verde">
    </form>
</main>

<?php incluirTemplate('footer');?>