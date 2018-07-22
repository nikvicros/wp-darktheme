<?php
/**
 Template Name: About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DarkStatus
 */

get_header();
?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full' );?>

 <div class="sub-page-header ds-about clear-filter" data-parallax="true" style="background-image: url('<?php echo $thumb['0'];?>') ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="contact-content">
            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <img class="img" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo/mf-logo-100.png">
                            </div>
                            <div class="card-body ">
                                <h6 class="card-category text-gray">Blogger / Foodie</h6>
                                <h4 class="card-title">Moody Foodie</h4>
                                <p class="card-description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <h2 class="title">Send me a message</h2>
                        <p class="description">Send Love, Hate or just comments. Either way, I'll read them all and try to respond.
                            <br>
                            <br>
                        </p>
                        <form role="form" id="contact-form" method="post">
                            <div class="form-group">
                                <label for="name" class="bmd-label-floating">Your name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmails">
                                <span class="bmd-help">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="form-group label-floating">
                                <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                                <textarea class="form-control" rows="6" id="message"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php get_footer();


