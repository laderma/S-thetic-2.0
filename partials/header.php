<!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="theme-color" content="#C31A3B" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
</head>

<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?> push">

    <div id="" class="module-wrapper" style="">
        <div id="" class="choose-tel" style="">
            <h2>Wählen Sie einen Standort</h2>
            <ul>
                <li><a href="#">Düsseldorf</a></li>
                <li><a href="#">Hamburg</a></li>
                <li><a href="#">Köln</a></li>
                <li><a href="#">München</a></li>
                <li><a href="#">Stuttgart</a></li>
                <li><a href="#">Bad Dürkheim</a></li>
                <li><a href="#">Frankfurt</a></li>
                <li><a href="#">Nürnberg</a></li>
            </ul>
            <span class="close-module"><img src="http://webdev.laderma.net/x/templates/s-thetic.de2.0/images/template/close.png" /></span>
        </div>
    </div>

    <div id="" class="header" style="">
        <div id="" class="grid" style="">
            <div id="" class="grid-row" style="">
                <img src="http://webdev.laderma.net/x/templates/s-thetic.de2.0/images/template/logo.png"/>
            </div>
            <div id="" class="grid-row" style="">
                <jdoc:include type="modules" name="top-menu" style="xhtml" />
            </div>
            <div id="" class="grid-row" style="">
                <div id="" class="tel-info toggle" style="">
                    <img class="tel-icon" src="http://webdev.laderma.net/x/templates/s-thetic.de2.0/images/template/telephone.png" />
                    <span class="tel">0211 - 436 9340</span>
                </div>
            </div>
        </div>
    </div>

    <div id="" class="slider" style="">
        <div id="" class="slider-content" style="">
            <h1>Willkommen bei S-thetic</h1>
            <p>Wir helfen Patienten, sich in Ihrer haut wohl zu fühlen - Dank Modernster Methoden und Plastischer Chirurgie lassen sich Körper und Wunschdenken verinen.</p>
        </div>
    </div>