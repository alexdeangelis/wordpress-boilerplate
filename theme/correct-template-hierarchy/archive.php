<?php

// A fallback template that shows the post archive
// Needs to use the standard 'Template Name:' Format at the top of the template & linked in pages in order to work 
// For custom post types use archive-customPostType.php

/*
Template Name: Post Archive
*/

get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>