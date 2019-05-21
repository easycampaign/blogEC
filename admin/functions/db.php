<?php
  $db['db_host'] = "162.241.2.244";
  $db['db_user'] = "potetb96_easy";
  $db['db_pass'] = "easy@potet";
  $db['db_name'] = "potetb96_dbblog";

  foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if(!$connection){
    echo "Ocorreu um erro ao tentar se conectar do o servidor de banco de dados;";
    echo "Favor contatar o administrator do sistema.";
  }

 ?>
