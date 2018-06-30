<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DarkStatus
 */

get_header();
?>

    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

 	<div class="mf-hero-main page-header mf-section-bg-dark-gray">
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 mf-latest-post-header ">
                    <div class="card card-raised card-background " style="background-image: url('<?php echo $thumb['0'];?>') ">
                        <div class="card-body ">
                                <h2 class="card-title" id="post-<?php the_ID(); ?>">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <?php the_title(); ?></a></h2>
                                <h4><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mf-cat-travel ">
                    <div class="card card-background ds-cards " style="background-image: url( '<?php bloginfo('stylesheet_directory') ?>/assets/img/cats/galactic.png') ">
                        <a href="#darkstatus "></a>
                        <div class="card-body ds-card-body ">
                            <a href="#darkstatus ">
                                <h2 class="card-title ">Universe</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row collections ">
                <div class="col-md-4 mf-cat-home ">
                    <div class="card card-background ds-cards " style="background-image: url( '<?php bloginfo('stylesheet_directory') ?>/assets/img/cats/metric.png') ">
                        <a href="#darkstatus "></a>
                        <div class="card-body ds-card-body ">
                            <a href="#darkstatus ">
                                <h2 class="card-title">Theories</h2>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mf-cat-review ">
                    <div class="card card-background ds-cards " style="background-image: url( '<?php bloginfo('stylesheet_directory') ?>/assets/img/cats/spectrum.png') ">
                        <a href="#darkstatus "></a>
                        <div class="card-body ">

                            <a href="#darkstatus ">
                                <h2 class="card-title ">Discoveries</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mf-cat-recipe ">
                    <div class="card card-background ds-cards " style="background-image: url( '<?php bloginfo('stylesheet_directory') ?>/assets/img//cats/jewels.png') ">
                        <a href="#darkstatus "></a>
                        <div class="card-body ">

                            <a href="#darkstatus ">
                                <h2 class="card-title ">Humanity</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--     *********    IMAGE SUBSCRIBE LINE     *********      -->
    <div class="subscribe-line mf-section-bg-dark-gray">
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 ml-auto mr-auto ">
                    <div class="text-center ">
                        <h3 class="title ">Subscribe to my Newsletter</h3>
                        <p class="description ">
                            Join DS newsletter and get news in your inbox once a month! I hate spam too, so no worries about this.
                        </p>
                    </div>
                    <div class="card card-raised card-form-horizontal ">
                        <div class="card-body ">
                            <form method=" " action=" ">
                                <div class="row ">
                                    <div class="col-lg-8 col-md-6 ">
                                        <div class="input-group ">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text ">
                                                                <i class="material-icons ">mail</i>
                                                            </span>
                                            </div>
                                            <input type="email " value=" " placeholder="Your Email... " class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 ">
                                        <button type="button " class="btn btn-primary btn-block ">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--     *********   IMAGE SUBSCRIBE LINE     *********      -->

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

<?php get_footer();
