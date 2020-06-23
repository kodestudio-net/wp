<?php get_header(); ?>
    <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
         width="<?php echo get_custom_header()->width; ?>" alt=""/>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <h1>Our Services</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service-item">
                                <?php
                                if (is_active_sidebar('service-1')) {
                                    dynamic_sidebar('service-1');
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                                <?php
                                if (is_active_sidebar('service-2')) {
                                    dynamic_sidebar('service-2');
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                                <?php
                                if (is_active_sidebar('service-3')) {
                                    dynamic_sidebar('service-3');
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <?php get_sidebar('home'); ?>
                        <div class="news col-md-9">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $filters = [];
                                    $featured = new WP_Query($filters);
                                    if ($featured->have_posts()):
                                        while ($featured->have_posts()):
                                            $featured->the_post();
                                            ?>
                                            <div class="col-12">
                                                <?php get_template_part('template-parts/content', 'featured'); ?>
                                            </div>
                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">
                        Map
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>