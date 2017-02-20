<?php get_header(); ?>

    <div id="edukia-osoa" role="main">

        <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category', 'librezale'), single_cat_title()) ?></h2>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2 class="pagetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;', 'librezale'), single_tag_title()) ?></h2>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2 class="pagetitle"><?php printf(__('Archive for %s', 'librezale'), the_time(__('Y-m-d', 'librezale'))); ?></h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2 class="pagetitle"><?php printf(__('Archive for %s', 'librezale'), the_time(__('Y-m', 'librezale'))); ?></h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2 class="pagetitle"><?php printf(__('Archive for %s', 'librezale'), the_time('Y')); ?></h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2 class="pagetitle"><?php __('Author Archive') ?></h2>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="pagetitle"><?php __('Blog Archives') ?></h2>
        <?php } ?>


        <div class="nabigazioa">
            <div class="ezkerrean"><?php previous_posts_link('&laquo; Aurreko bidalketak') ?></div>
            <div class="eskuinean"><?php next_posts_link('Hurrengo bidalketak &raquo;') ?></div>
        </div>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permalink: %s', 'librezale'), the_title_attribute()); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time(__('Y-m-d', 'librezale')) ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('', ', ', ' / '); the_category(', ') ?> | <?php edit_post_link(__('Edit', 'librezale'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'librezale'), __('1 Comment &#187;', 'librezale'), __('% Comments &#187;', 'librezale')); ?></p>

			</div>

		<?php endwhile; ?>

        <div class="nabigazioa">
            <div class="ezkerrean"><?php previous_posts_link() ?></div>
            <div class="eskuinean"><?php next_posts_link() ?></div>
        </div>
	<?php else :

		if ( is_category() ) { // If this is a category archive ?>
			<h2 class='center'>
            <?php
            printf(__("Sorry, but there aren't any posts in the %s category yet.", "librezale"), single_cat_title('',false)); ?>
            </h2>
            <?php
		} else if ( is_date() ) { // If this is a date archive ?>
            <h2>
            <?php
			echo(__("Sorry, but there aren't any posts with this date.", "librezale")); ?>
            </h2>
            <?php
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name')); ?>
            <h2 class='center'>
            <?php
			printf(__("Sorry, but there aren't any posts by %s yet.", "librezale"), $userdata->display_name); ?>
            </h2>
            <?php
		} else {
			echo("<h2 class='center'>".__('No posts found.', 'librezale')."</h2>");
		}
		get_search_form();

	endif;
?>

	</div>

<?php get_footer(); ?>
