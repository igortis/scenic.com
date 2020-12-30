<?php
/**
 * Template name: Homepage Template Two
 */


get_header(); ?>

    <!-- ABOUT -->
    <section id="about" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                        <h3><?php the_field('title_one');?></h3>
                        <h1><?php the_field('title_two');?></h1>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- PROJECT -->
    <section id="project" class="parallax-section">
        <div class="container">
            <div class="row">


                <?php
                $argsStudio = array(
                    // add our post
                    'post_type'  => 'studio',
                    // show all posts in our_people
                    'post_per_page' => -1
                );
                $studio = new WP_Query( $argsStudio );
                ?>

                <?php
                while ( $studio->have_posts() ) :
                    $studio->the_post();
                    ?>
                    <div class="col-md-6 col-sm-6">
                        <!-- PROJECT ITEM -->
                        <div class="project-item">
                            <!-- link on images -->
                            <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full' );?>" class="image-popup">
                                <!-- show images -->
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full' );?>


                                <div class="project-overlay">
                                    <div class="project-info">
                                        <!-- it`s possible to get something fields from posts studio -->
                                        <h1><?php the_title(); ?></h1>
                                        <h3><?php the_excerpt(); ?></h3>
                                        <!--
                                        <h2><?php the_author(); ?></h2>
                                        -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php
                endwhile; // End of the loop.
                ?>


            </div>
        </div>
    </section>



    <!-- TEAM -->
    <section id="team" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                        <h1><?php the_field('title_three', $wp_query->get_queried_object_id()); ?></h1>
                    </div>
                </div>





                <div class="clearfix"></div>

                <div id="owl-team" class="owl-carousel">
                    <?php
                    $args = array(
                        // add our post
                        'post_type'  => 'our_people',
                        // show all posts in our_people
                        'post_per_page' => -1
                    );
                    $ourPeople = new WP_Query( $args );
                    ?>

                    <?php
                    while ( $ourPeople->have_posts() ) :
                        $ourPeople->the_post();
                        ?>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="team-item">
                                <!-- show images -->
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full' );?>
                                <div class="team-overlay">
                                    <ul class="social-icon">
                                        <?php if (get_field('instagram')){ ?> <li><a href="<?php the_field('instagram');?>" class="fa fa-instagram"></a></li> <?php } ?>
                                        <?php if (get_field('facebook')){ ?> <li><a href="<?php the_field('facebook');?>" class="fa fa-facebook"></a></li> <?php } ?>
                                        <?php if (get_field('twitter')){ ?> <li><a href="<?php the_field('twitter');?>" class="fa fa-twitter"></a></li> <?php } ?>

                                    </ul>
                                </div>
                            </div>
                            <p><?php the_title(); ?></p>
                            <!-- function from plugin Custom Fields -->
                            <h3><?php the_field('worker')?></h3>
                        </div>
                    <?php
                    endwhile; // End of the loop.
                    ?>

                </div>

            </div>
        </div>
    </section>



    <!-- CONTACT -->
    <section id="contact" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                        <h1><?php the_field('title_four', $wp_query->get_queried_object_id()); ?></h1>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" action="#" method="get" role="form">

                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <h6 class="text-success">Your message has been sent successfully. </h6>

                        <!-- IF MAIL SENDING UNSUCCESSFULL -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-name" name="cf-name" placeholder="Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="cf-email" name="cf-email" placeholder="Email Address">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">
                            <textarea class="form-control" rows="5" id="cf-message" name="cf-message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                            <div class="section-btn">
                                <button type="submit" class="form-control" id="cf-submit" name="submit"><span data-hover="Send Message">Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


<?php get_footer();

