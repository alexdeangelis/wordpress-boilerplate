<?php 

/* Template Name: Home Page */ 

?>

<?php

get_header();

include get_template_directory() . '/layouts/one-column-width.php';
include get_template_directory() . '/layouts/variable-width-content.php';
include get_template_directory() . '/layouts/column-breaks.php';
include get_template_directory() . '/layouts/gutters.php';
include get_template_directory() . '/layouts/vertial-alignment.php';
include get_template_directory() . '/layouts/horizontal-alignment.php';
include get_template_directory() . '/layouts/no-gutters.php';
include get_template_directory() . '/layouts/reordering.php';
include get_template_directory() . '/layouts/offsetting.php';
include get_template_directory() . '/layouts/margin-utilities.php';

get_footer();

?>