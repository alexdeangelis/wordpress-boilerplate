<?php 

$themeURL = get_template_directory_uri();

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title><?php echo get_bloginfo( 'name' );?> - <?php echo get_bloginfo( 'description' ); ?></title>

        <?php wp_head(); ?>

    </head>
    
    <body <?php body_class(); ?>>
        
        <!--Here's a standard nav, modified from the Bootstrap example-->
        
        <div class="container">

            <!-- Static navbar -->
            <nav class="navbar navbar-default">


                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>




                        <div class="logo">
                            <a href="/">

                                <img src="https://dcnetworks.ie/wp/wp-content/uploads/2017/11/placeholder-logo-2.png"/>

                            </a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">

                        <div class="menu-main-menu-container">
                            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                        </div>
                    </div><!--/.nav-collapse -->
            </nav>



        </div> <!-- /container -->