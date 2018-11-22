<?php get_header(); ?>

    <section class="media">
        <div class="container">
            <header>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="YoDa">
                <h1>Mídia</h1>
            </header>

            <div class="grid">
            <?php if( have_rows('midia') ): ?>
                <?php  while ( have_rows('midia') ) : the_row(); ?>
                <a href="<?php the_sub_field('link'); ?>" class="item">
                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                    <h2><?php the_sub_field('titulo'); ?></h2>
                </a>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>