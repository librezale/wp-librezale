<?php get_header(); ?>

    <div id="edukia-osoa" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2>
            <p class="post-meta-head"><?php the_time(__('Y-m-d', 'librezale')) ?> / <?php the_tags('', ', ', '<br />'); ?> <!-- by <?php the_author() ?> --></p>

            <div class="post-gorputza">
                <?php the_content(__('read the rest of this entry &raquo;', 'librezale')); ?>
            </div>

            <p class="post-meta-foot clear">
                <?php if ( comments_open() && pings_open() ) {
                    // Both Comments and Pings are open
                    printf(__('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.', 'librezale'), trackback_url(false));

                } elseif ( !comments_open() && pings_open() ) {
                    // Only Pings are Open
                    printf(__('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.', 'librezale'), trackback_url(false) );

                } elseif ( comments_open() && !pings_open() ) {
                    // Comments are open, Pings are not
                    _e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'librezale');

                } elseif ( !comments_open() && !pings_open() ) {
                    // Neither Comments, nor Pings are open
                    _e('Both comments and pings are currently closed.', 'librezale');

                } ?>
                <?php edit_post_link(__('Edit this entry', 'librezale'), '', '.'); ?>
            </p>
        </div>

        <div class="nabigazioa">
            <div class="ezkerrean"><?php previous_post_link() ?></div>
            <div class="eskuinean"><?php next_post_link() ?></div>
        </div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php __('Sorry, no posts matched your criteria.', 'librezale') ?></p>

    <?php endif; ?>

    </div>

<?php get_footer(); ?>
