<?php get_header(); ?>

    <div class="home">
        <div class="left"></div>
        <a href="mailto:contato@sehloirooficial.com.br" target="_blank" class="mail">
            <span class="fa fa-envelope"></span>
            <span>contato@sehloirooficial.com.br</span>
        </a>
        <div class="right">
            <h1>Felipe<br />YoDa</h1>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/yoda.png" alt="YoDa" class="yoda">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="Logo" class="logo">
        </div>
    </div>

    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bundle.min.js"></script>
</body>

</html>