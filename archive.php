<?php get_header(); ?>

<main class="contenido">

    <h1 class="titulo-entrada"><?php the_archive_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?>>

                <h2 class="titulo-entrada">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="imagen-destacada">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>

                <div class="contenido-entrada">
                    <?php the_excerpt(); ?>
                </div>

            </article>

        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p>No hay contenido disponible en esta categoría.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
