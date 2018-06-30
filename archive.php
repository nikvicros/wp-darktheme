<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DarkStatus
 */

get_header();
?>



	 <div class="main mf-section-bg-dark-gray ">
		<!--     *********     BLOGS       *********      -->
        <div class="blogs-2 " id="blogs-2 ">
            <div class="container "> 
				<div class="row ">
                    <div class="col-md-12 ml-auto mr-auto ">
 						<div class="row ">

									<?php
											if ( have_posts() ) :

											if ( is_home() && ! is_front_page() ) :
										?>

										<?php
										endif;

										/* Start the Loop */
										while ( have_posts() ) :
											the_post();

											/*
											* Include the Post-Type-specific template for the content.
											* If you want to override this in a child theme, then include a file
											* called content-___.php (where ___ is the Post Type name) and that will be used instead.
											*/

											get_template_part( 'template-parts/content', get_post_type() );

										endwhile;

										the_posts_navigation();

									else :

										get_template_part( 'template-parts/content', 'none' );

									endif;
									?>
						</div><!-- End Container-->
					</div><!-- End Blogs 2-->
				</div>
			</div>
        </div> 
    </div> <!-- END MAIN -->

<?php 
get_footer(); ?>
