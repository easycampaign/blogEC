<?php include "components/header.php" ?>

<?php include "components/carousel.php"?>

<?php 
    include "admin/functions/db.php";
    include "admin/functions/functionsPosts.php";
?>

<div class="main">
    <div class="block latest-posts">
        <div class="block-title">
            <i class="far fa-clock"></i>
            <span>Últimos posts</span>
        </div>
        <div class="postagens">
            <?php
                $primeiro = true;
  
                $query = "SELECT a.*, b.categoria_nome 
                            FROM post a 
                            JOIN categoria b on a.post_categoria_codigo = b.categoria_codigo
                           where post_deletado = 0
                           order by post_codigo desc";
                $select_todos_posts = mysqli_query($connection, $query);
             
                while($row = mysqli_fetch_assoc($select_todos_posts)) {
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

                    if ($primeiro) {
                    ?> 
                        <div class="card bg-dark text-white post destaque">
                        <?php $primeiro = false; 
                    } else {
                    ?> 
                        <div class="card bg-dark text-white post">
                    <?php } ?>
                    <img src=" <?php echo $post_imagem; ?> " class="card-img">
                    <span class="tag post-tag"> <?php echo $post_categotia; ?> </span>
                    <div class="card-img-overlay">
                        <div class="card-title post-title">
                            <h3> <?php echo $post_titulo; ?> </h3>
                            <div class="post-info">
                                <span class="author">
                                    <h5>Por <?php echo $post_autor; ?> </h5>
                                </span> |
                                <span class="date"><?php echo $post_data; ?> </span>
                            </div>
                        </div>
                        <div class="card-text post-description">
                            <p><?php  echo substr($post_conteudo, 0, 100); ?> ...</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        <div class="more">
            <a href="#" class="legend">Ver todos os posts</a>
            <i class="fa fa-long-arrow-alt-right"></i>
        </div>
    </div>

    <div class="block more-comments">
        <div class="block-title">
            <i class="far fa-clock"></i>
            <span>Mais comentados</span>
        </div>
        <div class="postagens">
            <?php
                $query = "SELECT count(*) as TOTAL, comentario_post_codigo FROM `comentarios` where comentario_deletado = 0 group by comentario_post_codigo ";
                $count = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($count)) {
                    $total = $row['TOTAL'];
                    $codigo_post = $row['comentario_post_codigo'];
                    
                    if ($total >= 3) {
                        $query = "SELECT a.*, b.categoria_nome 
                                    FROM post a 
                                    JOIN categoria b on a.post_categoria_codigo = b.categoria_codigo
                                   WHERE post_codigo = $codigo_post
                                     and post_deletado = 0";
                        $select_posts = mysqli_query($connection, $query);
                        
                        $row = mysqli_fetch_assoc($select_posts);

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
                        <div class="card bg-dark text-white post">
                            <img src=" <?php echo $post_imagem; ?> " class="card-img">
                            <span class="tag post-tag"> <?php echo $post_categotia; ?> </span>
                            <div class="card-img-overlay">
                                <div class="card-title post-title">
                                    <h3> <?php echo $post_titulo; ?> </h3>
                                    <div class="post-info">
                                        <span class="author">
                                            <h5>Por <?php echo $post_autor; ?> </h5>
                                        </span> |
                                        <span class="date"><?php echo $post_data; ?> </span>
                                    </div>
                                </div>
                                <div class="card-text post-description">
                                    <p><?php  echo substr($post_conteudo, 0, 100); ?> ...</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>

        <div class="more">
            <a href="#" class="legend">Ver todos os posts</a>
            <i class="fa fa-long-arrow-alt-right"></i>
        </div>
    </div>
</div>

<div class="widget categories">
    <div class="row category">
        <div class="col-sm-6 image">
            <img src="/blog/media/image/building.jpg" alt="Inovations">
            <h2>Inovations</h2>
        </div>
        <div class="col-sm-6 align-vertical description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus deserunt et magnam magni molestiae nihil, placeat repellat sunt? Distinctio dolor impedit, ipsam magni nobis numquam optio porro praesentium quia sit.</p>
            <a href="#">Descobrir inovações</a>
        </div>
    </div>
    <div class="row category">
        <div class="col-sm-6 align-vertical description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus deserunt et magnam magni molestiae nihil, placeat repellat sunt? Distinctio dolor impedit, ipsam magni nobis numquam optio porro praesentium quia sit.</p>
            <a href="#">Encontrar soluções</a>
        </div>
        <div class="col-sm-6 image">
            <img src="/blog/media/image/typing.jpg" alt="Solutions">
            <h2>Solutions</h2>
        </div>
    </div>
    <div class="row category">
        <div class="col-sm-6 image">
            <img src="/blog/media/image/case-studies.jpg" alt="Cases">
            <h2>Cases</h2>
        </div>
        <div class="col-sm-6 align-vertical description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus deserunt et magnam magni molestiae nihil, placeat repellat sunt? Distinctio dolor impedit, ipsam magni nobis numquam optio porro praesentium quia sit.</p>
            <a href="#">Conhecer casos</a>
        </div>
    </div>
</div>

<div class="row about-us">
    <div class="col-sm-6 sigla">
        <a href="/blog/index.php">
            <img src="/blog/media/logo/sigla-branco.png" alt="Sigla Easy Campaign">
        </a>
    </div>
    <div class="col-sm-6 align-vertical description">
        <p>A <strong>Easy Campaign</strong> é uma ferramenta para o gerenciamento inteligente e mais assertivo de campanhas de marketing digital para lojas virtuais.</p>
        <button type="button" class="btn btn-outline" value="Conhecer mais">Conhecer mais</button>
    </div>
</div>

<?php include "components/footer.php"?>
