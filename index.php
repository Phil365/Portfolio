 <?php
    /***CONNEXION AVEC LES FUNCTIONS****************************************/
     include 'config/mesParametresBD.php';
     include 'classes_pdo.php';
     include 'texte.php';
     /***********************************************************************/
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="author" content="Philippe Germain">
    <meta name="description" content="Mon Porfolio, intégrateur multimédia, html 5, CSS, Javascript">

    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Mon Portfolio Philippe Germain">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon.png">

    <!-- Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Mon Portfolio Philippe Germain">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Windows 8 -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">


    <meta name="theme-color" content="#000000">

    <link rel="shortcut icon" href="favicon.ico">

    <title>Mon Portfolio Philippe Germain</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='style/index.css' rel='stylesheet' type='text/css'>
    
   


</head>

<body>  
  
    <section id="one">
        <div class=“inner”>
            <h1>ScrollMagic Tutorial</h1>
            <p>Learn how to <strong>pin elements</strong>.</p>
        </div>
    </section>
    <section id="two">
        <div class=“inner”>
            <h1>ScrollMagic Tutorial</h1>
            <p>Learn how to create a <strong>ScrollMagic scene</strong>.</p>
        </div>
    </section>
    <section id="three">
        <div class=“inner”>
            <h1>ScrollMagic Tutorial</h1>
            <p>Learn how to customize debug <strong>indicators</strong>.</p>
        </div>
    </section>
    <section id="four">
        <div class=“inner”>
            <h1>ScrollMagic Tutorial</h1>
            <p>Learn how to toggle classes using <strong>setClassToggle</strong>.</p>
            
            <?php 
            $unTexte= new Texte('','','');
                                $textes=  Texte::listerTousArticles(1);
                                echo "<div id='contenuArt'>";
                                foreach ($textes as $index => $value) {
                                    $value->afficher();
                                }
            ?>
        </div>
    </section>


    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="bower_components/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="bower_components/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script src="bower_components/gsap/src/uncompressed/TweenMax.js"></script>
    <script src="js/main.js"></script>
    <!--
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-XXXXXXXX-X', 'auto');
        ga('send', 'pageview');

    </script>
-->
</body>

</html>
