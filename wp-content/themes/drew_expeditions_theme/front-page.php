<?php
/**
 * Homepage template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="home">
        <div class="home__carousel">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                        $args = array(
                            'post_type' => 'carousel',
                            'orderby' => 'menu_order title',
                            'order'   => 'ASC',
                        );
                        $query = new WP_Query( $args );
                    ?>
                    <?php if($query->have_posts()) : ?>
                    <?php $i = 0; ?>
                    <?php while($query->have_posts()) : $query->the_post() ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>"
                        class="<?php if($i === 0): ?>active<?php endif; ?>"></li>
                    <?php $i++; ?>
                    <?php endwhile ?>
                    <?php endif ?>
                    <?php wp_reset_postdata(); ?>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <?php
                        $args = array(
                            'post_type' => 'carousel',
                            'orderby' => 'menu_order title',
                            'order'   => 'ASC',
                        );
                        $query = new WP_Query( $args );
                    ?>
                    <?php if($query->have_posts()) : ?>
                    <?php $i = 0; ?>
                    <?php while($query->have_posts()) : $query->the_post() ?>
                    <div class="carousel-item <?php if($i === 0): ?>active<?php endif; ?>">
                        <?php the_post_thumbnail(); ?>
                        <div class="carousel-caption">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endwhile ?>
                    <?php endif ?>
                    <?php wp_reset_postdata(); ?>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="home__content">
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia suscipit quam, sagittis dictum
                    nulla
                    scelerisque eu. Nam orci lacus, accumsan a blandit nec, finibus condimentum quam. Donec egestas,
                    purus
                    eget congue ultrices, quam odio mattis tortor, vitae fermentum neque diam <a href="#">non dolor</a>.
                </p>

                <p>
                    Aliquam hendrerit imperdiet sodales. Maecenas porta lorem ut aliquet lacinia. Phasellus elementum
                    augue
                    ipsum, sed maximus nunc aliquam sed. Sed suscipit tempus mollis. Aenean quis aliquam dui. Sed
                    dignissim
                    cursus faucibus nunc orci.
                </p>

                <p class="text-center home__button">
                    <a href="/drew-expeditions/apply/" class="btn btn-primary btn-lg">
                        Send application <i class="fas fa-chevron-right"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>

</main><!-- #main -->


<?php
get_footer();