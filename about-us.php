<?php include "components/header.php" ?>

<div class="main">
    <div class="block latest-posts">
        <div class="block-title">
            <i class="far fa-clock"></i>
            <span>Últimos posts</span>
        </div>
        <div class="postagens">
            <div class="card bg-dark text-white post destaque">
                <img src="/blog/media/image/destaque.jpg" class="card-img">
                <span class="tag post-tag">
                    Solutions
                </span>
                <div class="card-img-overlay">
                    <div class="card-title post-title">
                        <h3>"Como fazer o seu blog aumentar a sua visibilidade na internet."</h3>
                        <div class="post-info">
                            <span class="author">
                                <h5>Por Talissa Andrade</h5>
                            </span> |
                            <span class="date">04-05</span>
                        </div>
                    </div>
                    <div class="card-text post-description">
                        <p>Vivemos na era da internet onde somos atacados por anúncios de lojas de roupas, alimentos, servicos e eventos além de sites onde há sites que disponibilizam conteúdo...</p>
                    </div>
                </div>
            </div>
            <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="card bg-dark text-white post">
                <img src="/blog/media/image/destaque.jpg" class="card-img">
                <span class="tag post-tag">
                    Solutions
                </span>
                <div class="card-img-overlay">
                    <div class="card-title post-title">
                        <h3>"Como fazer o seu blog aumentar a sua visibilidade na internet."</h3>
                        <div class="post-info">
                            <span class="author">
                                <h5>Por Talissa Andrade</h5>
                            </span> |
                            <span class="date">04-05</span>
                        </div>
                    </div>
                    <div class="card-text post-description">
                        <p>Vivemos na era da internet onde somos atacados por anúncios de lojas de roupas, alimentos, servicos e eventos além de sites onde há sites que disponibilizam conteúdo...</p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
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
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="card bg-dark text-white post">
                    <img src="/blog/media/image/destaque.jpg" class="card-img">
                    <span class="tag post-tag">
                    Solutions
                </span>
                    <div class="card-img-overlay">
                        <div class="card-title post-title">
                            <h3>"Como fazer o seu blog aumentar a sua visibilidade na internet."</h3>
                            <div class="post-info">
                            <span class="author">
                                <h5>Por Talissa Andrade</h5>
                            </span> |
                                <span class="date">04-05</span>
                            </div>
                        </div>
                        <div class="card-text post-description">
                            <p>Vivemos na era da internet onde somos atacados por anúncios de lojas de roupas, alimentos, servicos e eventos além de sites onde há sites que disponibilizam conteúdo...</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
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