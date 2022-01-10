<?php require '../views/header.php' ?>

    <div class="contenedor">
            <div class="post">
                <article>
                    <h2 class="Titulo">Nuevo artículo</a></h2>
                    <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="titulo" placeholder="Titulo del articulo">
                        <input type="text" name="extracto" placeholder="Extracto del artículo">
                        <textarea name="texto" placeholder="Texto del artículo"></textarea>
                        <input type="file" name="thumb">

                        <input type="submit" value="Crear Articulo">

                    </form>
                </article>
            </div>
    </div>

    <?php require '../views/footer.php'; ?>