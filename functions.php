<?php

// Lokalizazioko testuingurua
load_theme_textdomain('librezale', get_template_directory() . '/lang');

// Jarioak gehitzeko HEADera
automatic_feed_links();

// Featured Images gaitu - Mikel
add_theme_support( 'post-thumbnails' );

// Widget estiloko albo-barra definitu
if ( function_exists('register_sidebar') ) { 
    register_sidebar(array( 
        'before_widget' => '<li id="%1$s" class="widget %2$s">', 
        'after_widget' => '</li>', 
        'before_title' => '<h2 class="widget-izenburua">', 
        'after_title' => '</h2>', 
    )); 
} 

// Iruzkinen itxura kontrolatzeko
function list_comments($comment, $args, $depth) {
 $GLOBALS['comment'] = $comment;
 global $commentcount;
 if(!$commentcount) { $commentcount = 0; }

 if($comment->comment_type != 'pingback' || $comment->comment_type != 'trackback') { ?>

  <!-- iruzkina -->
  <li id="iruzkina-<?php comment_ID() ?>" <?php comment_class() ?>>
      <div class="iruzkina<?php if($comment->user_id == 1) echo ' iruzkinberezia'; else echo ' iruzkinarrunta'; ?>">
          <div class="iruzkina-burua">
              <p class="ezkerrean">
                   <?php
                    if (get_comment_author_url()):
                        $authorlink='<a class="iruzkina-egilea" id="iruzkina-egilea-'.get_comment_ID().'" href="'.get_comment_author_url().'">'.get_comment_author().'</a>';
                    else:
                        $authorlink='<strong id="iruzkina-egilea-'.get_comment_ID().'">'.get_comment_author().'</strong>';
                    endif;
                    printf(__('%s %s &mdash; %s'), '<a class="iruzkina-id" href="#iruzkina-'.get_comment_ID().'">#'.++$commentcount.'</a>', $authorlink, get_comment_time(get_option('date_format')).' @ '.get_comment_time(get_option('time_format')));
                   ?>
              </p>
      
              <?php if (comments_open()) { ?>
              <p class="eskuinean">
                   <?php
                    if (function_exists('comment_reply_link')) {
                     comment_reply_link(array_merge( $args, array('add_below' => 'iruzkina-erantzun', 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '<span>'.__('Reply','arclite').'</span>'.$my_comment_count)));
                    } ?>
                    <?php edit_comment_link('(edit)','',''); ?>
      
              </p>
              <?php } ?>
          </div>
          <div class="clear"></div>
          <div class="iruzkina-gorputza" id="iruzkina-gorputza-<?php comment_ID() ?>">
              <?php if (function_exists('get_avatar') && get_option('show_avatars')) { ?>
              <div class="avatar ezkerrean"><?php echo get_avatar($comment, 36); ?></div>
              <?php } ?>
   
              <div class="iruzkina-testua"><?php comment_text(); ?></div>
              <a id="iruzkina-erantzun-<?php comment_ID() ?>"></a>
   
              <?php if ($comment->comment_approved == '0') : ?>
              <p class="errorea"><?php _e('Your comment is awaiting moderation.', 'librezale'); ?></p>
              <?php endif; ?>
          </div>
      </div>
<?php  // </li> automatikoa da
  } }
?>
