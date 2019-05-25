<footer class="footer">
    <div class="row footer-container">
        <div class="col-sm-6 information">
            <a href="/blog/index.php">
                <img src="/blog/media/logo/logo-white.png" alt="Logo Easy Campaign">
            </a>
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
        </div>
        <div class="col-sm-6 social-network">
            <div class="align-vertical wrapper">
                <h3>Vem com a gente!</h3>
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="https://www.facebook.com/easycampaignoficial/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="navbar-brand" href="https://www.youtube.com/channel/UCPTwpTPMj8s4A-UF2M7GOLw">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="navbar-brand" href="https://www.instagram.com/easycampaignoficial/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <div class="row copyright">
        <p>© 2019 | Easy Campaign. Todos os direitos reservados.</p>
    </div>
</footer>
</body>
</html>