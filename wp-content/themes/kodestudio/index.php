<?php get_header(); ?>
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
                    <div class="row">
                        Service
                    </div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3">Sidebar</aside>
                        <div class="news col-md-9">
                            <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                endwhile;
                                else:
                                ?>
                                <p>There's nothing yet to display.</p>
                                <?php
                            endif;
                            ?>
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