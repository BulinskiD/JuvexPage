    <!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?php echo get_bloginfo( 'name' );?></title>
    <?php wp_head() ?>
</head>
<body>


    <header id="logo">
        <svg viewBox="0 0 500 410">
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

                width="380" height="267" />
        </pattern>

    </defs>
            <rect width="360" height="260" fill="url(#img1)" style="fill-opacity: 1; stroke-width:10; stroke:rgb(23,161,165)" />
            <rect x="280" y="180" width="120" height="220" style="fill-opacity:0;stroke-width:10;stroke:rgb(23,161,165)" />
        </svg>
    </header>
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

                
        <!--Navbar-->
        <div class="row">
            <div class="col-lg-4 col-0"></div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white col-lg-8 col-12" id="navbar">
                    <a class="navbar-brand" href="#"></a>
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
                            'exclude'=> 77)); ?>
                        </ul>
                    </div>
            </nav>
            <h1 hidden="hidden">Nauka Jazdy Kraków Kliny</h1>
        </div>