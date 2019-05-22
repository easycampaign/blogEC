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

// FUNÇÃO QUE RECUPERA USUARIO POR ID
function recuperarDadosPorId($cod_user){
  global $connection;

  $query = "SELECT * FROM usuario where usuario_codigo = $cod_user";
  $usuario = mysqli_query($connection, $query);

  $row = mysqli_fetch_assoc($usuario);
  $nome = $row['usuario']; 

  return $nome;
}

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

 ?>
