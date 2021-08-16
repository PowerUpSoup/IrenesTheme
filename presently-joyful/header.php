<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Presently Joyful Blog Site">
    <meta name="author" content="https://github.com/PowerUpSoup">        
    
	<?php
    wp_head();
    ?>

</head> 

<body>
    
    <!-- Nav Section -->
    <section id="nav">
        <div class="nav container" style="background-color: transparent;">
        
            
            <div class="nav-bar">
                
                <?php
                if(function_exists('the_custom_logo')){
                    
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                ?>

               
                <div class="branding" style="display: flex;">
                     <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >
                     <a href=".header">
                        <h2>Presently <span>Joyful</span></h2>
                    </a>
                </div>
                <div class="nav-list">
                    <div id="hamburger" class="hamburger" onClick="hamburgerExpand()">
                        <div class="bar"></div>
                    </div>
                   
                    <?php

                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="mobile-menu" class="mobile-menu"> %3$s</ul>'
                            )
                        )

                    ?>
            
                </div>
            </div>
        </div>
    </section>
    
    <!-- End Nav Section -->

    <!-- Header Section -->
    <section id="header">
        <div class="header container">
        
        </div>
    </section>
    <!-- Old Header Section -->
    <!-- <header class="header text-center">	    
	    <a class="site-title pt-lg-4 mb-0" href="index.html">
            <?php echo get_bloginfo('name'); ?>
        </a>
        
	   
    </header> -->

    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>