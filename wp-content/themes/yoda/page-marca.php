<?php get_header(); the_post(); ?>

    <section class="career">
        <div class="text">
            <header class="brand">
                <div class="info">
                    <h1>A marca</h1>
                </div>
            </header>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-big.png" class="yoda logo"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-brand.jpg" class="bg" />
        </div>
    </section>
    
    <section class="partners">
        <div class="container">
            <h2>Parceiros</h2>
            <div class="grid">
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/red-canids.png" alt="Red Canids">
                </a>
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitch.png" alt="Twitch">
                </a>
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logitech.png" alt="Logitech">
                </a>
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2-am.png" alt="2AM">
                </a>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <h2>Parceiros</h2>
            <div class="grid">
                <a href="http://www.redcanids.com.br/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/red-canids.png" alt="Red Canids">
                </a>
                <a href="https://www.twitch.tv/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitch.png" alt="Twitch">
                </a>
                <a href="https://www.logitech.com/pt-br" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logitech.png" alt="Logitech">
                </a>
                <a href="https://www.2amgaming.com/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2-am.png" alt="2AM">
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>