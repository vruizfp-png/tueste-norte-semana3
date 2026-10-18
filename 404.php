<?php get_header(); ?>

<main class="contenido">

    <h1 class="titulo-entrada">404 — Página no encontrada</h1>

    <p>El café no está aquí… pero puedes volver al inicio.</p>

    <p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="boton-volver">
            Volver al inicio
        </a>
    </p>

</main>

<?php get_footer(); ?>
