<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ANDROID -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">

    <!-- SEO -->
    <title>Easy Campaign | Inteligência que converte!</title>
    <meta name="description" content="O Easy Campaign é uma ferramenta de gerenciamento inteligente de campanhas de marketing que sugere campanhas e faz o acompanhamento do estoque dos produtos.">

    <!-- URL CANONICAL -->
    <link rel="canonical" href="https://potetbrod.com.br/blog/">

    <!-- FAVICONS -->
    <link rel="shortcut icon" sizes="16x16" href="/blog/media/favicons/favicon16.png">
    <link rel="shortcut icon" sizes="32x32" href="/blog/media/favicons/favicon32.png">
    <link rel="apple-touch-icon icon" sizes="76x76" href="/blog/media/favicons/favicon76.png">
    <link rel="apple-touch-icon icon" sizes="120x120" href="/blog/media/favicons/favicon120.png">
    <link rel="apple-touch-icon icon" sizes="152x152" href="/blog/media/favicons/favicon152.png">
    <link rel="apple-touch-icon icon" sizes="180x180" href="/blog/media/favicons/favicon180.png">
    <link rel="apple-touch-icon icon" sizes="192x192" href="/blog/media/favicons/favicon192.png">

    <!-- FACEBOOK -->
    <meta property="og:url" content="https://nayarafelix.github.io/SiteEmpresa/">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Easy Campaign | Inteligência que converte!">
    <meta property="og:description" content="O Easy Campaign é uma ferramenta de gerenciamento inteligente de campanhas de marketing que sugere campanhas e faz o acompanhamento do estoque dos produtos.">
    <meta property="og:updated_time" content="2018-10-01T12:20:00">
    <meta property="og:image" content="media/share/share-ec.jpg">

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@easycampaign">
    <meta name="twitter:creator" content="@nayarafelix">
    <meta name="twitter:title" content="Easy Campaign | Inteligência que converte!">
    <meta name="twitter:description" content="O Easy Campaign é uma ferramenta de gerenciamento inteligente de campanhas de marketing que sugere campanhas e faz o acompanhamento do estoque dos produtos.">
    <meta name="twitter:image" content="media/share/share-ec.jpg">

    <!--  LIBS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!--  EASY CAMPAIGN  -->
    <link rel="stylesheet" href="/blog/web/main.css">
<!--    <script src="web/main.js"></script>-->

    <title>Blog Easy Campaign</title>

</head>
<body>
    <div class="logo text-center">
        <a href="/blog/index.php">
            <img src="/blog/media/logo/logo-blue.jpg" alt="Easy Campaign" class="rounded">
        </a>
    </div>
    <div class="header">
        <nav class="nav navigation">
            <a href="/blog/index.php" class="nav-link">Início</a>
            <?php
                $query = "SELECT * FROM categoria where categoria_deletado = 0
                           order by categoria_data_inclusao";
                $menu = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($menu)) {
                    $titulo = $row['categoria_nome'];
                    $id = $row['categoria_codigo'];
                ?>
                    <a href="/blog/category/default.php?id=<?php echo $id; ?>" class="nav-link"><?php echo $titulo; ?></a>
                <?php
                }
            ?>

            <a href="/blog/about-us.php" class="nav-link">Sobre nós</a>
        </nav>
        <div class="search">
            <input type="text" name="search" id="search" class="form-control search-input">
            <i class="fa fa-search"></i>
        </div>
    </div>
