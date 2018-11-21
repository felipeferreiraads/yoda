<?php get_header(); the_post(); ?>

    <section class="career">
        <div class="text">
            <header>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="YoDa">
                </figure>
                <div class="info">
                    <h1>Felipe Noronha</h1>
                    <p>mais conhecido pelo apelido de <span>YoDa</span>, é o maior streamer e jogador profissional do Brail</p>
                </div>
            </header>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yoda-pic.png" class="yoda"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-career.jpg" class="bg" />
        </div>
    </section>

    <section class="feature">
        <div class="container">
            <div class="grid">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sehloiro.png" alt="SehLoiro">
                </div>
                <div class="text">
                    <?php the_field('sehloiro'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="feature yotalkshow">
        <div class="container">
            <div class="grid">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-yotalkshow.png" alt="YoTalkshow">
                </div>
                <div class="text">
                    <?php the_field('yotalkshow'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="feature noline">
        <div class="container">
            <div class="grid">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-noline.png" alt="NoLine">
                </div>
                <div class="text">
                    <?php the_field('noline'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="awards">
        <div class="container">
            <div class="grid">
                <p>YoDa concorreu ao Prêmio eSports Brasil 2017 nas categorias <strong>Personalidade do Ano, Melhor Streamer e Craque da Galera,</strong>onde foi o único a ganhar os 3 prêmios concorridos.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trophy.png" alt="Awards">
            </div>
        </div>
    </section>

    <section class="proplayer">
        <div class="container">
            <h2>ProPlayer</h2>
            <p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yoda-career.jpg" alt="ProPlayer">
                <?php the_field('carreira'); ?>
                <span>#ÉOQ</span>
            </p>
        </div>
    </section>

<?php get_footer(); ?>