<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DarkStatus
 */

?>

    <div class="col-md-4 ">
        <div class="card card-blog card-summary-background">
            <div class="card-header card-header-image ">
				<img class="img img-raised" src=<?php the_post_thumbnail( 'medium' ); ?>
            </div>
            <div class="card-body ">
            <h6 class="card-category text-discoveries">
                <?php the_category(  ); ?>
                </h6>
                <h4 class="card-title ">
					<?php
						if ( is_singular() ) :
							the_title( '<h4 class="entry-title card-title">', '</h4>' );
						else :
							the_title( '<h4 class="entry-title card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
						endif;

						if ( 'post' === get_post_type() ) :
					?>

					<?php endif; ?>
                	</h4>
						<span class="card-description">
                            <?php the_excerpt(  ); ?>
						</span>
            </div>
        </div>
	</div>

