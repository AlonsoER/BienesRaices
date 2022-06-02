<?php
require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion contenido__centrado">
    <h1>Guía para la decoración de tu hogar</h1>
    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img src="build/img/destacada2.jpg" alt="Imagen destacada" loading="lazy">
    </picture>
    <p class="info__meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
    <div class="resumen__propiedad">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati adipisci excepturi quisquam
            recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit
            magnam inventore, expedita tempora distinctio, assumenda in?adipisicing elit. Obcaecati adipisci excepturi quisquam
            recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit
            magnam inventore, expedita tempora distinctio, assumenda in</p>

        <p>Consequuntur quis impedit magnam inventore, expedita tempora distinctio, assumenda in?adipisicing
            elit. Obcaecati adipisci excepturi quisquam
            recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit
            magnam inventore expedita tempora distinctio, assumenda in</p>
    </div>
</main>

<?php incluirTemplate('footer'); ?>