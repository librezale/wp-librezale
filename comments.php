<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php __('This post is password protected. Enter the password to view comments.', 'librezale') ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="iruzkinak"><?php comments_number(__('No Responses', 'librezale'), __('One Response', 'librezale'), __('% responses', 'librezale') );?></h3>

	<div class="nabigazioa">
		<div class="ezkerrean"><?php previous_comments_link() ?></div>
		<div class="eskuinean"><?php next_comments_link() ?></div>
	</div>

	<ul id="iruzkinak">
	<?php wp_list_comments('callback=list_comments'); ?>
	</ul>

	<div class="nabigazioa">
		<div class="ezkerrean"><?php previous_comments_link() ?></div>
		<div class="eskuinean"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php __('Comments are closed.', 'librezale') ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">
    <h3><?php comment_form_title(); ?></h3>

    <div class="cancel-comment-reply">
        <small><?php cancel_comment_reply_link(); ?></small>
    </div>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'librezale'),  wp_login_url( get_permalink() )) ?></p>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

    <?php if ( is_user_logged_in() ) : ?>

    <p><?php printf(__('Logged in as <a href="%1$s/wp-admin/profile.php">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out &raquo;</a>', 'librezale'), get_option('siteurl'), $user_identity, wp_logout_url(get_permalink()) ) ?></p>

    <?php else : ?>

    <p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="author"><small><?php _e('Name', 'librezale'); if ($req) echo "<span class='beharrezkoa'>*</span>"; ?></small></label></p>

    <p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="email"><small><?php _e('Mail (will not be published)', 'librezale'); if ($req) echo "<span class='beharrezkoa'>*</span>"; ?></small></label></p>

    <p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
    <label for="url"><small><?php _e('Website', 'librezale'); ?></small></label></p>

    <?php endif; ?>

    <p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

    <p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>', 'librezale'), allowed_tags() ); ?></small></p>

    <p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'librezale') ?>" />
    <?php comment_id_fields(); ?>
    </p>
    <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
