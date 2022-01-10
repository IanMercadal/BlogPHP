<?php require 'header.php' ?>

    <div class="contenedor">
        <?php foreach ($resultados as $post): ?>
            
            <div class="post">
                <article>
                    <h2 class="Titulo"><a href="single.php?id=<?php echo $post['id']?>"><?php echo $post['titulo'] ?> </a></h2>
                    <p class="fecha"> <?php echo $post['fecha'] ?> </p>
                    <div lcass="thumb">
                        <a href="single.php?id=<?php echo $post['id']?>">
                            <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'] ?>" alt="">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto'] ?></p>
                    <a href="single.php?id=<?php echo $post['id']?>" class="container">Continuar Leyendo</a>
                </article>
            </div>
        <?php endforeach; ?>

        <?php require 'paginacion.php'; ?>
    </div>

    <?php require 'footer.php'; ?>