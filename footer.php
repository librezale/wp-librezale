            <div class="clear"></div>
            <div id="oina">
                <p id="informazio-menua"><a href="<?php echo get_option('home'); ?>/wiki/Zer da Librezale?" title="<?php _e('What is Librezale?', 'librezale') ?>"><?php _e('What is Librezale?', 'librezale') ?></a> | <a href="<?php echo get_option('home'); ?>/wiki/Kontaktua" title="<?php _e('Contact Information', 'librezale') ?>"><?php _e('Contact', 'librezale') ?></a> | <a href="<?php echo get_option('home'); ?>/wiki/RSS jarioa" title="<?php _e('RSS Feed', 'librezale') ?>"><?php _e('RSS Feed', 'librezale') ?></a> | <a href="<?php echo get_option('home'); ?>/wiki/Lizentzia" title="<?php _e('License', 'librezale') ?>"><?php _e('License', 'librezale') ?></a></p>
                <p id="kreditu-menua"><strong><?php _e('Software Used:', 'librezale') ?></strong> <a href="http://www.mediawiki.org" title="MediaWiki">MediaWiki</a>, <a href="http://eu.wordpress.org" title="WordPress">WordPress</a> eta <a href="http://www.fluxbb.org" title="FluxBB">FluxBB</a></p>
            </div>
        </div>

    <!-- Piwik -->
    <script type="text/javascript">
    var pkBaseURL = (("https:" == document.location.protocol) ? "https://librezale.eus/estatistikak/" : "http://librezale.eus/estatistikak/");
    document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
    </script><script type="text/javascript">
    try {
    var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
    piwikTracker.trackPageView();
    piwikTracker.enableLinkTracking();
    } catch( err ) {}
    </script><noscript><p><img src="http://librezale.eus/estatistikak/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
    <!-- End Piwik Tag -->

    <?php wp_footer(); ?>

    </body>
</html>
