<div class="carousel-container">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                <a href="/blog/post/post1.php">
                    <span class="tag carousel-tag">
                    Solutions
                </span>
                    <img src="/blog/media/image/article.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="carousel-title">
                            <div class="carousel-info">
                            <span class="author">
                                <h5>Por Talissa Andrade</h5>
                            </span> |
                                <span class="date">04-05</span>
                            </div>
                            <h3>"Como fazer o seu blog aumentar a sua visibilidade na internet."</h3>
                        </div>
                        <div class="carousel-description">
                            <p>Vivemos na era da internet onde somos atacados por anúncios de lojas de roupas, alimentos, servicos e eventos além de sites onde há sites que disponibilizam conteúdo...</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
        <div class="carousel-dots">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>