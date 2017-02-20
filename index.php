<?php get_header(); ?>

    <div id="albiste-blokea" class="ezkerrean" role="main">

        <h2><?php _e('News', 'librezale') ?></h2>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permalink: %s', 'librezale'), the_title_attribute()) ?>"><?php the_title(); ?></a></h3>
                <p class="post-meta-head"><?php the_time(__('Y-m-d', 'librezale')) ?> / <?php the_tags('', ', ', ' '); edit_post_link(__('(edit)', 'librezale'), '', ''); ?> <!-- by <?php the_author() ?> --></p>

                <div class="post-gorputza">
                    <?php the_content(__('Read the full contents &raquo;', 'librezale')); ?>
                </div>

                <p class="post-meta-foot"><?php comments_popup_link(__('No comments &#187;', 'librezale'), __('One comment &#187;', 'librezale'), __('% comments &#187;', 'librezale')); ?></p>
            </div>

        <?php endwhile; ?>

        <div class="nabigazioa">
            <div class="ezkerrean"><?php previous_posts_link('&laquo; Aurreko bidalketak') ?></div>
            <div class="eskuinean"><?php next_posts_link('Hurrengo bidalketak &raquo;') ?></div>
        </div>

    <?php else : ?>

        <h3><?php __('Not Found.', 'librezale') ?></h3>
        <p><?php __('We are sorry, but the page you are looking for does not exist.', 'librezale') ?></p>
        <?php get_search_form(); ?>

    <?php endif; ?>

    </div>

<?php get_sidebar(); ?>

    <div id="azala-estatikoa">

    <?php if(function_exists('iinclude_page')) iinclude_page(3); ?>

    </div>

<?php get_footer(); ?>
