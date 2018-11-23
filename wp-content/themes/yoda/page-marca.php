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

    <?php if( have_rows('parceiro') ): ?>
    <section class="partners">
        <div class="container">
            <h2>Parceiros</h2>
            <div class="grid">
            <?php  while ( have_rows('midia') ) : the_row(); ?>
                <a href="<?php the_sub_field('link'); ?>" target="_blank">
                    <img src="<?php the_sub_field('link'); ?>" alt="<?php the_sub_field('nome'); ?>">
                </a>
            <?php endwhile; ?>
            </div>
            <div class="arrows">
                <button class="prev"><span class="fa fa-angle-left"></span></button>
                <button class="next"><span class="fa fa-angle-right"></span></button>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php get_footer(); ?>