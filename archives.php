<?php
/*
Template Name: Artxiboa
*/
?>

<?php get_header(); ?>

    <div id="edukia-osoa" role="main">

        <h2><?php __('Posts Archive', 'librezale') ?></h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>

        <?php get_search_form(); ?>

    </div>

<?php get_footer(); ?>
