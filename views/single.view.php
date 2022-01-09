<?php require 'header.php' ?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="Titulo"><?php echo $post['titulo'] ?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']) ?></p>
                <div lcass="thumb">
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'] ?>" alt="<?php echo $post['titulo'] ?>">
                </div>
                <p class="extracto"><?php echo $post['texto'] ?></p>
            </article>
        </div>

    </div>

    <?php require 'footer.php'; ?>