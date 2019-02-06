<?php 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

            <div class="container">
                
                <div class="row">
            
			<?php
            $resources_count = 0;
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
                $content = get_the_content();
                $trimmed_content = wp_trim_words( $content, 30, '...' );
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				?>
            
                    <div class="col-xs-12 col-sm-4" style="padding-bottom:20px;">
                        <h3><?php the_title(); ?></h3>
                        <?php echo $trimmed_content; ?>
                    </div>
            
            <?php
                    $resources_count++;
                    if ($resources_count == 3) {
                        echo '</div><div class="row">';
                        $resources_count = 0;
                    } else { /*Nothing*/ }
				// End the loop.
			endwhile;
                    
            ?>
                </div>
                <div class="row">  
                    <div class="col-xs-12">
            <?php

			// Previous/next page navigation.
            archive_pagination();
            ?>
                    </div> 
                </div>
            <?php

			// If no content, include the "No posts found" template.
		else :
			'No posts found';

		endif;
		?>
                    
                
                
            </div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>