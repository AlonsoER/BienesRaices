<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        <div class="contenido__nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jepg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen nosotros">
                </picture>
            </div>
            <div class="texto__nosotros">
                <blokquote>25 años de experiencia</blokquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati adipisci excepturi quisquam 
                recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit 
                magnam inventore, expedita tempora distinctio, assumenda in?adipisicing elit. Obcaecati adipisci excepturi quisquam 
                recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit 
                magnam inventore, expedita tempora distinctio, assumenda in</p>

                <p>Consequuntur quis impedit magnam inventore, expedita tempora distinctio, assumenda in?adipisicing
                elit. Obcaecati adipisci excepturi quisquam 
                recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit 
                magnam inventore, expedita tempora distinctio, assumenda in</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

    <?php incluirTemplate('header');?>