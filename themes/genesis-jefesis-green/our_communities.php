<?php

add_action('genesis_after_header','home_page_slider');
function home_page_slider() {
    ?>
    <article>
        <div class="parallax">
            <div class="bg__foo">
                <div class="home-intro">
                    <div class="wrap">
                        <div class="one-third first">
                            <?php the_field('initial_box_1'); ?>
                        </div>
                        <div class="one-third">
                            <?php the_field('initial_box_2'); ?>
                        </div>
                        <div class="one-third">
                            <?php the_field('initial_box_3'); ?>
                            <br><br><button>Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image:url(<?php echo get_field('parallax_1')['url']; ?>);" class="bg__barss">
                <div class="wrap">
                    <div class="showcase">
                        <div class="parallax-info">
                            <?php the_field('show_case'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg__baz" style="background-image:url(<?php echo get_field('parallax_2')['url']; ?>);">
                <div class="wrap">
                    <div class="partners">
                        <div class="parallax-info">
                            <?php the_field('our_partners'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg__testimonial testimonials">
                <div class="wrap">
                    <h1>Testimonials</h1>
                    <div class="down-arrow_2"></div>
                    <?php
                    while ( have_rows('testimonials') ) : the_row();
                        $img = get_sub_field('image');
                        $url = $img['url'];
                        ?>
                        <div class="one-third">
                            <img src="<?php echo $url;?>">
                            <h2><?php the_sub_field('heading');?></h2>
                            <p><?php the_sub_field('body');?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="bg__footer-categories footer-categories" style="background-image:url(<?php echo get_field('parallax_3')['url']; ?>);">
                <div class="wrap">
                    <?php
                    while ( have_rows('footer_buttons') ) : the_row();
                        $img = get_sub_field('image');
                        $url = $img['url'];
                        ?>
                        <div class="one-third">
                            <img src="<?php echo $url;?>">
                            <h2><?php the_sub_field('title');?></h2>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </article>
    <?php
}

remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
genesis();