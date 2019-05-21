<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/blog/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/blog/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Easy Campaign Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/blog/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/blog/admin/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/blog/admin/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="http://www.easycampaign.com.br/blog" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/blog/admin/assets/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.easycampaign.com.br/blog" class="simple-text logo-normal">
            Easy Campaign
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="./index.php">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nc-icon nc-tag-content"></i>
                    <p>Categoria</p>
                </a>
                <ul class="nav">
                    <li>
                        <a href="./criarCategoria.php">
                            <p>Criar categoria</p>
                        </a>
                    </li>
                    <li>
                        <a href="./listarCategorias.php">
                            <p>Listar categorias</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Postagem</p>
                </a>
                <ul class="nav">
                    <li>
                        <a href="./criarPost.php">
                            <p>Criar postagem</p>
                        </a>
                    </li>
                    <li>
                        <a href="./listarPosts.php">
                            <p>Listar postagens</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Pesquisar...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- <div class="panel-header panel-header-sm"></div> -->

