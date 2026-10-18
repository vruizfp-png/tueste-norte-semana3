<?php get_header(); ?>

<main class="contenido">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h2>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>

        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>

        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <p>Todavía no hay contenido por aquí. Vuelve pronto: el café se está tostando.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
