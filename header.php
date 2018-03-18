<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/irudiak/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="orria">
            <div id="ezker-menuak">
                <a href="<?php echo get_option('home'); ?>/" title="Librezaleren sarrerako orrira"><img id="librezale-logoa<?php if (is_home() || is_front_page()) echo '-azala'; ?>" src="/irudiak/librezale-logoa.png" alt="<?php bloginfo('name'); ?>" /></a>
                <div id="bilatzailea">
                    <form action="/bilatu/" method="post">
                        <fieldset>
                            <label for="zer">Bilatu:</label>

                            <select name="non">
                                <option value="0">Librezale osoan</option>
                                <option value="1">Webgunean</option>
                                <option value="3">Albisteetan</option>
                            </select>
                            <input name="zer" id="zer" type="text" />
                            <input class="botoia" name="bilatu" type="submit" value="" /> 
                        </fieldset>

                    </form>
                </div>
            </div>
            <div id="eskuin-menuak">
                <div id="menua">
                    <div class="ezkerrean">
                        <h3>Librezale / <span class="txikitu">Menua</span></h3>
                        <ul id="menu-zerrenda">
                            <li><a href="/wiki/" title="Librezaleren wikiaren aurkibidera">Aurkibidea</a></li>
                            <li><a href="/wiki/Itzultzaileak" title="Itzultzaileentzako laguntzara">Itzultzaileak</a></li>
                            <li><a href="/wiki/Proiektuak" title="Proiektuen bildumara">Proiektuak</a></li>
                            <li><a href="/wiki/Kontaktua" title="Posta-zerrenda, Matrix eta Telegram taldeetara">Kontaktua</a></li>
                        </ul>
                    </div>
                    <div class="ezkerrean">
                        <a id="parte-hartu" href="/wiki/Parte hartu nahi duzu%3F">Parte hartu nahi duzu?</a>
                        <p id="menua-proiektuak">Proiektuak:</p>
                        <a href="/wiki/Mozilla" title="Mozilla proiektuaren orrira"><img src="/irudiak/menua-mozilla.png" alt="Mozilla" /></a><a href="/wiki/LibreOffice" title="LibreOffice proiektuaren orrira"><img src="/irudiak/menua-libreoffice.png" alt="LibreOffice" /></a><a href="/wiki/Proiektuak" title="Proiektu guztien orrira"><img class="azkena" src="/irudiak/menua-gehiago.png" alt="Gehiago..." /></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
