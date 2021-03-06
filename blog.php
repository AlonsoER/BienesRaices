<?php
require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro blog</h1>
    <article class="entrada__blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="layz" src="build/img/blog1.jpg" alt="Texto entrada blog">
            </picture>
        </div>
        <div class="texto__entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en los techos de tu casa con los mejores materiales y al mejor precio</p>
            </a>
        </div>
    </article>

    <article class="entrada__blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source srcset="build/img/blog2.jpg" type="image/jpeg">
                <img loading="layz" src="build/img/blog2.jpg" alt="Texto entrada blog">
            </picture>
        </div>
        <div class="texto__entrada">
            <a href="entrada.php">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Máximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para daler
                    vida a tu espacio</p>
            </a>
        </div>
    </article>

    <article class="entrada__blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img loading="layz" src="build/img/blog3.jpg" alt="Texto entrada blog">
            </picture>
        </div>
        <div class="texto__entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en los techos de tu casa con los mejores materiales y al mejor precio</p>
            </a>
        </div>
    </article>

    <article class="entrada__blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img loading="layz" src="build/img/blog4.jpg" alt="Texto entrada blog">
            </picture>
        </div>
        <div class="texto__entrada">
            <a href="entrada.php">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Máximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para daler
                    vida a tu espacio</p>
            </a>
        </div>
    </article>
</main>

<?php incluirTemplate('footer'); ?>