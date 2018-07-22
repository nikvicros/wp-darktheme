<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DarkStatus
 */

get_header(); ?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

	<div class="page-header ds-post-header" data-parallax="true" style="background-image: url('<?php echo $thumb['0'];?>') " >
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
					<h1 class="title"><?php the_title( ); ?></h1>
                    <h4>Cool Funny Subheader Here</h4>
                    <br>
                    <a href="#top-post" class="btn btn-rose btn-round btn-lg">
                        <i class="material-icons">format_align_left</i> Read Article
                    </a>
				</div>
			</div>
		</div>
	</div>


	<div id="top-post" class="main main-raised ds-post-body">
        <div class="container">
            <div class="section section-text">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">

					

					<?php 
					
						while ( have_posts() ) :
						the_post();

					
						get_template_part( 'template-parts/content-single', get_post_type() );
		

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					    endwhile; // End of the loop.
				
					?>

	

                    </div>
                </div>
            </div>
        </div>
	</div>




	  <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
			 		<h2 class="title text-center similar-stories">Similar Stories</h2>
					<br>
                    <div class="row">

								<?php
								//for use in the loop, list 5 post titles related to first tag on current post
								$tags = wp_get_post_tags($post->ID);

								if ($tags) {

								$first_tag = $tags[0]->term_id;

								$args=array(
								'tag__in' => array($first_tag),
								'post__not_in' => array($post->ID),
								'posts_per_page'=>3,
								'caller_get_posts'=>1
								);

								$my_query = new WP_Query($args);

								if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>


                        <div class="col-md-4">
                            <div class="card card-blog card-summary-background">
                                <div class="card-header card-header-image">
                                    <a href="#darkstatus">
                                        <img class="img img-raised" src=<?php the_post_thumbnail( 'medium' ); ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="category text-info related-category"><?php the_category(); ?></h6>
                                    <h4 class="card-title related-title">

                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Read
										<?php the_title_attribute(); ?>">

										<?php the_title(); ?></a>

                                    </h4>
                                    <p class="card-description related-description">
                                        <?php the_excerpt(); ?>
                                    </p>
								</div>
                            </div>
						</div>
								<?php
									endwhile;
									}
									wp_reset_query();
									}
								?>
					</div>
				</div>
            </div>
        </div>
	</div>

<?php get_footer();
