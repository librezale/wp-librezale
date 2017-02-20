<?php get_header(); ?>

	<div id="edukia-osoa" role="main">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle"><?php __('Search Results', 'librezale') ?></h2>

        <div class="nabigazioa">
            <div class="ezkerrean"><?php previous_posts_link() ?></div>
            <div class="eskuinean"><?php next_posts_link() ?></div>
        </div>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permalink: %s', 'librezale'), the_title_attribute()); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time(__('Y-m-d', 'librezale')) ?></small>

				<p class="postmetadata"><?php the_tags('', ', ', ' / '); the_category(', ') ?> | <?php edit_post_link(__('Edit', 'librezale'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'librezale'), __('1 Comment &#187;', 'librezale'), __('% Comments &#187;', 'librezale')); ?></p>
			</div>

		<?php endwhile; ?>

        <div class="nabigazioa">
            <div class="ezkerrean"><?php previous_posts_link('&laquo; Aurreko bidalketak') ?></div>
            <div class="eskuinean"><?php next_posts_link('Hurrengo bidalketak &raquo;') ?></div>
        </div>

	<?php else : ?>

		<h2 class="center"><?php _e('No posts found. Try a different search?', 'librezale') ?></h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
