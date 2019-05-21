<?php

// FUNÇÃO DE INSERIR CATEGORIA
function inserirCategoria() {
  global $connection;
  global $usuario;

  if (isset($_POST['enviar'])) {
    $cat_nome = $_POST['cat_nome'];
    $dataAtual = DATE('d/m/Y');
    
    if ($cat_nome == "") {
      echo "Insira uma categoria";
    } else {
      $query = "INSERT INTO categoria(categoria_descricao, categoria_data_inclusao, categoria_usuario_inclusao) 
                 VALUE ('$cat_nome', '$dataAtual', $usuario )";
      $resultado = mysqli_query($connection, $query);

      if (!$resultado) {
        echo "Ocorreu um erro ao tentar inserir categoria.";
      } else {
        echo "A categoria " . $cat_nome . " foi inserida com sucesso!";
      }
    }
  }
}

// FUNÇÃO DE MOSTRAR CATEGORIAS
function mostrarDadosCategoria(){
  global $connection;
  global $usuario;

  $query = "SELECT * FROM categoria";
  $select_todas_categorias = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_todas_categorias)){
      $cat_id = $row['categoria_codigo'];
      $cat_nome = $row['categoria_descricao'];
      $data_inclusao = $row['categoria_data_inclusao'];
      $usuario_inclusao = $row['categoria_usuario_inclusao'];
      $data_alteracao = $row['categoria_data_alteracao'];
      $usuario_alteracao = $row['categoria_usuario_alteracao'];
      $excluido = $row['categoria_deletado'];

      echo   '<tr>';
      echo    '<td>' . $cat_id . '</td>';
      echo    '<td>' . $cat_nome . '</td>';
      echo    '<td>' . $data_inclusao . '</td>';
      echo    '<td>' . $usuario_inclusao . '</td>';
      echo    '<td>' . $data_alteracao . '</td>';
      echo    '<td>' . $usuario_alteracao . '</td>';

      if ($excluido = 0) {
        echo    '<td>Ativo</td>';
        echo    '<td><a href="categorias.php?delete='. $cat_id .'">Apagar</a></td>';
      } else {
        echo    '<td>Inativo</td>';
      }

      echo    '<td><a href="categorias.php?edit=' . $cat_id  .'">Editar</a></td>';
      echo   '</tr>';
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
