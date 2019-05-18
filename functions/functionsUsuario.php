<?php

// FUNÇÃO DE INSERIR USUARIO
function inserirUsuario() {
  global $connection;
  global $usuario;

  if (isset($_POST['enviar'])) {
    
    $usu_nome = $_POST['usuario'];
    $usu_senha = $_POST['senha'];
    $dataAtual = DATE('d/m/Y');

    if ($usu_nome == "") {
      echo "Insira nome para o usuario";
    } if ($usu_senha == "") {
      echo "Insira senha para o usuario";
    } else {
      $query = "INSERT INTO usuario(usuario, usuario_senha, usuario_data_inclusao, usuario_inclusao) 
                 VALUE ('$usu_nome', '$usu_senha', '$dataAtual', $usuario)";
      $resultado = mysqli_query($connection, $query);

      if (!$resultado) {
        echo "Ocorreu um erro ao tentar inserir categoria.";
      } else {
        echo "A categoria " . $cat_nome . " foi inserida com sucesso!";
      }
    }
  }
}

/*
// FUNÇÃO DE MOSTRAR CATEGORIAS
function mostrarDadosCategoria(){
  global $connection;
  global $usuario;

  $query = "SELECT * FROM categoria";
  $select_todas_categorias = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_todas_categorias)){
      $cat_id = $row['categoria_codigo'];
      $cat_nome = $row['categoria_descricao'];
      echo   '<tr>';
      echo   '<td>' . $cat_id . '</td>';
      echo   '<td>' . $cat_nome . '</td>';
      echo   '<td><a href="categorias.php?delete='. $cat_id .'">Apagar</a></td>';
      echo   '<td><a href="categorias.php?edit=' . $cat_id  .'">Editar</a></td>';
      echo    '</tr>';
  }
}
*/

function alterarUsuario() {
  // FUNCAO QUE ALTERA USUARIO
  global $connection;
  global $usuario;

  $usu_nome = $_POST['categoria_descricao'];

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

// FUNÇÃO DE MOSTRAR POSTS
function mostrarDadosPost(){
  global $connection;

  $query = "SELECT * FROM post";
  $select_todos_posts = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_todos_posts)){
      $post_id = $row['post_id'];
      $post_titulo = $row['post_titulo'];
      $post_conteudo = $row['post_conteudo'];
      $post_data = $row['post_data'];
      $post_autor = $row['post_autor'];
      $post_tags = $row['post_tags'];
      $post_imagem = $row['post_imagem'];

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

// FUNÇÃO DE APAGAR CATEGORIA
function apagaCategoria(){
  global $connection;
  if(isset($_GET['delete'])){
      $apaga_cat_id = $_GET['delete'];

      $query = "DELETE FROM categoria WHERE cat_id = $apaga_cat_id";
      $apagandoId = mysqli_query($connection, $query);
      header("Location: categorias.php");

  }
}


 ?>
