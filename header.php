    <!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<<<<<<< HEAD
    <meta charset="utf-8" />
    <title><?php echo get_bloginfo( 'name' );?></title>
    <?php wp_head() ?>
</head>
<body>


    <header id="logo">
        <svg viewBox="0 0 500 410">
=======
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#17A1A5" />
    <meta name="keywords" content="nauka jazdy Kraków Borek Fałęcki,nauka jazdy Kraków Kliny,nauka jazdy Kraków Ruczaj,prawo jazdy Kraków Ruczaj">
    <meta name="Robots" content="INDEX,FOLLOW">
    <meta charset="utf-8" />
    <title><?php wp_title(); ?></title>
    <?php wp_head() ?>

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "Juvex Prawo Jazdy",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "ul. Fałęcka 32A",
            "addressLocality": "Kraków",
            "addressRegion": "woj. Małopolskie",
            "postalCode": "30-441"
        },
        "image": "https://oskjuvex.pl/wp-content/uploads/2018/11/cropped-juvex_logo3.png",
        "email": "kurs@oskjuvex.pl",
        "telePhone": "502-322-942",
        "url": "https://oskjuvex.pl/",
        "priceRange":"$"

    }
    </script>
</head>
<body>

<!-- FACEBOOK PLUGIN PAGE-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2&appId=679943122337573&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- END OF FPP-->




    <header id="logo">


        <a class="link d-lg-block d-none" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>

        <!-- DESKTOP VERSION LOGO -->
        <svg viewBox="0 0 500 410" class="d-lg-block d-none">
>>>>>>> ffd6dd803652445b2a9212a9ecae47e8b06ba2d0
            <defs>
        <pattern id="img1" patternUnits="userSpaceOnUse" width="100%" height="100%">
            <image class='twombly' xlink:href="


            <?php 
            //***************  CUSTOM LOGO UPLOADABLE FROM DASHBOARD

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
            echo esc_url( $logo[0] ).'"';
            } 

            else {
            echo get_bloginfo('template_directory').'/images/logo.gif"';} ?>

<<<<<<< HEAD
                width="380" height="267" />
=======
               width="380" height="267" />
>>>>>>> ffd6dd803652445b2a9212a9ecae47e8b06ba2d0
        </pattern>

    </defs>
            <rect width="360" height="260" fill="url(#img1)" style="fill-opacity: 1; stroke-width:10; stroke:rgb(23,161,165)" />
            <rect x="280" y="180" width="120" height="220" style="fill-opacity:0;stroke-width:10;stroke:rgb(23,161,165)" />
        </svg>
<<<<<<< HEAD
    </header>
=======
        <!-- MOBILE VERSION LOGO -->
        <div class="mobilelogo d-block d-lg-none">

        </div>


    </header>


>>>>>>> ffd6dd803652445b2a9212a9ecae47e8b06ba2d0
        <!--Szkolimy-->
        <aside id="teaching" class="d-lg-table d-none">
            <span class="teachinginside">
                Szkolimy od 1994
                <br />
                <br />
                profesjonalnie <br />
                bezstresowo <br />
                bezpiecznie <br />
            </span>
        </aside>

            <div class="container-fluid">

<<<<<<< HEAD
                
        <!--Navbar-->
        <div class="row">
            <div class="col-lg-4 col-0"></div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white col-lg-8 col-12" id="navbar">
                    <a class="navbar-brand" href="#"></a>
=======

        <!--Navbar-->
        <div class="row">
            <a class="col-lg-4 col-0" style="z-index: 15;" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
            <nav class="navbar navbar-expand-lg navbar-light bg-white col-lg-8 col-12" id="navbar">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">            <img class="d-block d-lg-none" alt="Juvex - prawo jazdy, nauka jazdy Kraków - Logo" src="<?php 
            //***************  CUSTOM LOGO UPLOADABLE FROM DASHBOARD

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
            echo esc_url( $logo[0] ).'"';
            } 

            else {
            echo get_bloginfo('template_directory').'/images/logo.gif"';} ?>

                style="height: 28vmin; width: auto; margin-top:-10%; margin-bottom: -10%;" /></a>
>>>>>>> ffd6dd803652445b2a9212a9ecae47e8b06ba2d0
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav text-center">
                            <li class="page_item nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona Główna</a></li>
                           <?php 
                           wp_list_pages(array(
        					'title_li'    => '',
        					'sort_column'    => 'post_date',
<<<<<<< HEAD
                            'exclude'=> 77)); ?>
                        </ul>
                    </div>
            </nav>
            <h1 hidden="hidden">Nauka Jazdy Kraków Kliny</h1>
=======
                            'exclude'=> 68)); ?>
                        </ul>
                    </div>
            </nav>
>>>>>>> ffd6dd803652445b2a9212a9ecae47e8b06ba2d0
        </div>