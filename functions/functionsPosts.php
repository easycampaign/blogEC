<?php

// FUNÇÃO DE INSERIR CATEGORIA
function inserirPost() {
  global $connection;
  global $usuario;

  if (isset($_POST['enviar'])) {
    $post_titulo = $_POST['post_titulo'];
    $post_autor = $_POST['post_autor'];
    $post_conteudo = $_POST['post_conteudo'];
    
    $post_imagem = $_FILES['post_imagem']['name'];
    $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];
    
    move_uploaded_file($post_imagem_temp, '../images/' . $post_imagem) ;

    $query = "INSERT INTO post(post_titulo, post_conteudo, post_data, post_autor, post_imagem) VALUES($post_titulo, $post_conteudo, now(), $post_autor, $post_imagem)";

    $add_post = mysqli_query($connection, $query);

    if (!$add_post) {
        echo "Falha na inscrição";
    } else {
        echo "Post adicionado com sucesso";
    }
}
}

// FUNÇÃO DE MOSTRAR POSTS
function mostrarDadosPost(){
  global $connection;

  $query = "SELECT a.*, b.categoria_descricao FROM post a JOIN categoria b on a.post_categoria_codigo = b.categoria_codigo";
  $select_todos_posts = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_todos_posts)){
      $post_id = $row['post_codigo'];
      $post_titulo = $row['post_titulo'];
      $post_conteudo = $row['post_conteudo'];
      $post_categotia = $row['categoria_descricao'];
      $post_tags = $row['post_tags'];
      $post_imagem = $row['post_imagem'];
      
      $post_data_inclusao = $row['post_data_inclusao'];
      $post_usuario_inclusao = $row['post_usuario_inclusao'];
      $post_data_alteracao = $row['post_data_alteracao'];
      $post_usuario_alteracao = $row['post_usuario_alteracao'];

      $post_deletado = $row['post_deletado'];

      if (empty($post_data_alteracao)) {
        $post_data = $post_data_inclusao;
      } else {
        $post_data = $post_data_alteracao;
      }
      
      if (empty($post_data_alteracao)) {
        $post_autor = $post_usuario_inclusao;
      } else {
        $post_autor = $post_usuario_alteracao;
      }

      echo   '<tr>';
      echo   '<td>' . $post_id . '</td>';
      echo   '<td>' . $post_titulo . '</td>';
      echo   '<td>' . $post_conteudo . '</td>';
      echo   '<td>' . $post_data . '</td>';
      echo   '<td>' . $post_autor . '</td>';
      echo   '<td>' . $post_tags . '</td>';
      echo   '<td>' . $post_id . '</td>';
      echo   '<td class="col-sm-2"><img src="../images/'. $post_imagem .'" class="img-responsive" alt="Responsive image"></td>';
      echo    '</tr>';
  }
}

function alterarCategoria() {
  // FUNCAO QUE ALTERA CATEGORIA
  global $connection;
  global $usuario;

  $edita_cat_nome = $_POST['categoria_descricao'];
  $dataAtual = DATE('d/m/Y');

  $query = "UPDATE categoria SET categoria_descricao = '$edita_cat_nome', 
                                 categoria_data_alteracao = '$dataAtual',
                                 categoria_usuario_alteracao = $usuario
             WHERE categoria_codigo = $cat_id";
  $resultado = mysqli_query($connection, $query);
  if (!$resultado) {
    echo "Ocorreu um erro ao tentar alterar categoria.";
  } else {
    echo "Categoria alterada com sucesso!";
  }
}

// FUNÇÃO DE APAGAR CATEGORIA LOGICA
function apagaCategoria(){
  global $connection;

  if(isset($_GET['delete'])){
      $apaga_cat_id = $_GET['delete'];

      $query = "UPDATE categoria SET categoria_data_alteracao = '$dataAtual', 
                                     categoria_usuario_alteracao = $usuario,
                                     categoria_deletado = '1'
                 WHERE categoria_codigo = $apaga_cat_id";
      $apagandoId = mysqli_query($connection, $query);

      header("Location: categorias.php");
  }
}

 ?>
