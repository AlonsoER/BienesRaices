<?php
require 'includes/funciones.php';


incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
    <h1>Más sobre nosotros</h1>
    <div class="iconos__nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Dolorum pariatur laborum quasi assumenda expeditamagnam nam delectus, id, doloribus quidem ex,
                accusantium reprehenderit dicta! Veritatis, sit ea.</p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Dolorum pariatur laborum quasi assumenda expeditamagnam nam delectus, id, doloribus quidem ex,
                accusantium reprehenderit dicta! Veritatis, sit ea.</p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Dolorum pariatur laborum quasi assumenda expeditamagnam nam delectus, id, doloribus quidem ex,
                accusantium reprehenderit dicta! Veritatis, sit ea.</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y departamentos en venta</h2>
    <div class="contenedor__anuncios">
        <div class="anuncio">
            <picture>
                <source src="build/img/anuncio1.webp" type="image/webp">
                <source src="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio 1">
            </picture>
            <div class="contenido__anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos__caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="WC">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Estacionamiento">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Dormitorio">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton__amarillo--block">Ver propiedad</a>
            </div>
        </div>

        <div class="anuncio">
            <picture>
                <source src="build/img/anuncio2.webp" type="image/webp">
                <source src="build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio 1">
            </picture>
            <div class="contenido__anuncio">
                <h3>Casa terminados de lujo</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos__caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="WC">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Estacionamiento">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Dormitorio">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton__amarillo--block">Ver propiedad</a>
            </div>
        </div>

        <div class="anuncio">
            <picture>
                <source src="build/img/anuncio3.webp" type="image/webp">
                <source src="build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio 1">
            </picture>
            <div class="contenido__anuncio">
                <h3>Casa con alberca</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos__caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="WC">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Estacionamiento">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Dormitorio">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton__amarillo--block">Ver propiedad</a>
            </div>
        </div>
    </div>
    <div class="alinear__derecha">
        <a href="anuncios.php" class="boton__verde">Ver todas</a>
    </div>
</section>

<section class="imagen__contacto">
    <h2>Encuentra la casa de tu sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo</p>
    <a href="contacto.php" class="boton__amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion__inferior">
    <section class="blog">
        <h3>Nuestro blog</h3>
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
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas
                mis espectativas
            </blockquote>
            <p>- AlonsoER</p>
        </div>
    </section>
</div>

<?php incluirTemplate('footer'); ?>