<div class="carousel-container">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <?php
                $primeiro = true;
                $query = "SELECT a.*, b.categoria_nome 
                                FROM post a 
                                JOIN categoria b on a.post_categoria_codigo = b.categoria_codigo
                               where post_deletado = 0
                               order by post_codigo desc";
                $select_todos_posts = mysqli_query($connection, $query);
            ?>

            <?php while ($row = mysqli_fetch_assoc($select_todos_posts)) : ?>
                <?php
                    $post_id = $row['post_codigo'];
                    $post_titulo = $row['post_titulo'];
                    $post_conteudo = $row['post_conteudo'];
                    $post_categotia = $row['categoria_nome'];
                    $post_tags = $row['post_tags'];
                    $post_imagem = $row['post_imagem'];

                    $post_data_inclusao = $row['post_data_inclusao'];
                    $post_usuario_inclusao = $row['post_usuario_inclusao'];
                    $post_data_alteracao = $row['post_data_alteracao'];
                    $post_usuario_alteracao = $row['post_usuario_alteracao'];

                    if (empty($post_data_alteracao)) {
                        $post_data = $post_data_inclusao;
                    } else {
                        $post_data = $post_data_alteracao;
                    }

                    if (empty($post_data_alteracao)) {
                        $select_usuario = recuperarDadosPorId($post_usuario_inclusao);
                        $post_autor = $select_usuario;
                    } else {
                        $post_autor = $post_usuario_alteracao;
                    }
                ?>

                <?php if ($primeiro) : ?>
                <div class="carousel-item active">
                <?php $primeiro = false;?>
                <?php else : ?>
                <div class="carousel-item">
                <?php endif; ?>
                    <a href="/blog/post/post1.php">
                        <span class="tag carousel-tag"><?php echo $post_categotia; ?></span>
                        <img src=" <?php echo $post_imagem; ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="carousel-title">
                                <div class="carousel-info">
                                    <span class="author">
                                        <h5>Por <?php echo $post_autor; ?></h5>
                                    </span> |
                                    <span class="date"><?php echo $post_data; ?></span>
                                </div>
                                <h3><?php echo $post_titulo; ?></h3>
                            </div>
                            <div class="carousel-description">
                                <p><?php echo substr($post_conteudo, 0, 100); ?>...</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="carousel-dots">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>