	<div id="azkenak-blokea" class="ezkerrean" role="complementary">
		<ul>
            <?php   /* Widgetized sidebar, if you have the plugin installed. */
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
            <li>
                <?php get_search_form(); ?>
            </li>
            <?php endif; ?>
		</ul>
	</div>
