
<?php get_header(); ?>

<main class="contenido">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article <?php post_class(); ?>>

            <h1 class="titulo-entrada"><?php the_title(); ?></h1>

            <div class="contenido-entrada">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
