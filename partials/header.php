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

<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">

    <div id="" class="module-wrapper tel" style="">
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

    <div id="" class="module-wrapper cookie" style="">
        <div id="" class="cookie-info" style="">
            <h2>Wichtige Informationen zu Cookies</h2>
            <p>Zur Verbesserung Ihrer Benutzererlebnisses verwenden wir auf dieser Webseite Cookies. Wenn Sie diese Webseite weiterhin besuchen, erklären Sie sich damit einverstanden. Wir freuen uns auf Ihren Besuch! Ihr S-thetic.de - Team</p>
            <a href="#" class="close-cookie button">Ich bin einverstanden</a>
        </div>
    </div>

    <div id="" class="header" style="">
        <div id="" class="grid" style="">
            <div id="" class="grid-row" style="">
                <img src="http://webdev.laderma.net/x/templates/s-thetic.de2.0/images/template/logo.png" />
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
        <div id="" class="grid" style="">
            <div id="" class="grid-row" style="">
                <h2>Unsere Erfahrung ist Ihr Plus</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div id="" class="grid-row" style="">
                <form>
                    <div id="" class="form-wrapper" style="">
                        <h2>Kostenlose Beratung und Infomaterial</h2>
                        <div id="" class="grid" style="">

                            <div id="" class="grid-row" style="">
                                <input type="text" class="icon-avatar" placeholder="Ihr Name, Vorname" name="" />
                            </div>

                            <div id="" class="grid-row" style="">
                                <input type="text" class="icon-tele" placeholder="Ihre Telefonnummer" name="" />
                            </div>

                            <div id="" class="grid-row" style="">
                                <input type="text" class="icon-email" placeholder="Ihre E-Mail" name="" />
                            </div>

                            <div id="" class="grid-row" style="">
                                <select class="icon-location">
                                    <option>Standort wählen</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                    <option>Lorem Ipsum</option>
                                </select>
                            </div>

                            <div id="" class="grid-row" style="">
                                <input type="text" class="icon-message" placeholder="Betreff Ihrer Nachricht" name="" />
                            </div>

                            <div id="" class="grid-row" style="">
                                <textarea placeholder="Ihre Nachricht"></textarea>
                            </div>
                            <div id="" class="grid-row" style="">
                                <input type="submit" value="Absenden" name="" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>