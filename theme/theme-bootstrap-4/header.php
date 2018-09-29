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
        
        <!--Favicons-->
        
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $themeURL; ?>/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $themeURL; ?>/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $themeURL; ?>/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $themeURL; ?>/favicons/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $themeURL; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <?php wp_head(); ?>

    </head>
    
    <body <?php body_class(); ?>>
        
        <!--Here's a standard nav, modified from the Bootstrap example-->
        
        