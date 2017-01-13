
<?php
/**
* Template Name: Parallax Template
* Description: Used as a page template to show page contents, followed by a loop 
*/


//* Page parallax 
add_action('genesis_after_header','parallax_slides');
function parallax_slides() {
	?>
	<article>
	    <div class="parallax">
			<div style="background-image:url(<?php echo get_field('featured_image')['url']; ?>);" class="bg__first">
				<div class="home-intro">
		        	<div class="wrap">
		        		<?php
		        		$class='';
		        		if( have_rows('featured_image_text') ):
						    while ( have_rows('featured_image_text') ) : the_row();
								if($i%3==0) {
		        				$class='first';
			        			} else {
			        				$class="";
			        			}
								?><div class="one-third <?php echo $class;?>"><?php
						        	the_sub_field('column');
						        ?></div><?php
						        $i++;
						    endwhile;
						endif;
						?>
		        	</div>
		        </div>
			</div>
			<div style="background-image:url(<?php echo get_field('parallax_1')['url']; ?>);" class="bg__barss">
				<div class="wrap">
					<div class="showcase">
						<div class="parallax-info">
							<?php the_field('parallax_1_content'); ?>
						</div>
					</div>
				</div>
			</div>    
			<div class="bg__baz" style="background-image:url(<?php echo get_field('parallax_2')['url']; ?>);">
				<div class="wrap">
					<div class="partners">
						<div class="parallax-info">
							<?php the_field('parallax_2_content'); ?>
						</div>
					</div>
				</div>
			</div>
			<div style="background-image:url(<?php echo get_field('parallax_3')['url']; ?>);" class="bg__barss">
				<div class="wrap">
					<div class="showcase">
						<div class="parallax-info">
							<?php the_field('parallax_3_content'); ?>
						</div>
					</div>
				</div>
			</div>      
	    </div>
    </article>
  	<?php
  	if(is_page_template( 'parallax-template.php' )) {
  		?>
		<div class="more-coming">More Communities Coming Soon</div>
  		<?php
  	}
}

//* Remove default Wordpress entry content
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

genesis();