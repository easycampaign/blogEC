<?php 
    include "../components/header.php";
    include "../functions/functionsPosts.php";

    $id = $_GET['id'];

    if (!empty($id)) {
        $query = "SELECT * FROM categoria where categoria_deletado = 0 and categoria_codigo = $id";
        $menu = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($menu)) {
            $titulo = $row['categoria_nome'];
            $imagem = $row['categoria_imagem'];
?>

<div class="banner-category">
    <img src="..<?php echo $imagem; ?> ">
    <h1><?php echo $titulo; ?></h1>
</div>

<!-- 
<div class="filter">
    <select class="select filter-select" id="filter">
        <option selected>Ordenar por ...</option>
        <option value="1">Mais recente</option>
        <option value="2">Mais antigo</option>
        <option value="3">Mais vistos</option>
    </select>
</div>
-->

<div class="container">
    <div class="postagens">
        <?php
            $primeiro = true;
  
            $query = "SELECT a.*, b.categoria_nome 
                        FROM post a 
                        JOIN categoria b on a.post_categoria_codigo = b.categoria_codigo
                       where post_deletado = 0
                         and b.categoria_codigo = $id
                       order by post_codigo desc";
            $select_posts = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_posts)) {
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
        <?php    } 
        ?>
</div>

<?php 
        }
    }

    require_once("../components/footer.php");
?>
