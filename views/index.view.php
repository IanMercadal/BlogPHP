<?php require 'header.php' ?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="Titulo">Título article</h2>
                <p class="fecha">1 de Enero de 2016</p>
                <div lcass="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                    </a>
                </div>
                <p class="extracto">Lorem ipsum, dolor sit amet consectetur adipisicing e</p>
                <a href="#" class="container">Continuar Leyendo</a>
            </article>
        </div>

        <div class="post">
            <article>
                <h2 class="Titulo">Título article</h2>
                <p class="fecha">1 de Enero de 2022</p>
                <div lcass="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                    </a>
                </div>
                <p class="extracto">Lorem ipsum, dolor sit amet consectetur adipisicing e</p>
                <a href="#" class="container">Continuar Leyendo</a>
            </article>
        </div>

        <?php require 'paginacion.php'; ?>
    </div>

    <?php require 'footer.php'; ?>