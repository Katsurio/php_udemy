<?php
/*
Template Name: Meet the Team
*/


add_action('genesis_entry_content','add_gallery_images');
function add_gallery_images() {
	$i=0;
	// check if the repeater field has rows of data
	if( have_rows('team_row') ):

	 	// loop through the rows of data
	    while ( have_rows('team_row') ) : the_row();
	        // display a sub field value
	       $img = get_sub_field('image');
	       $bio = get_sub_field('bio');
	       $class= 'one-half';
	       $i = $i%2;
	     
	       	$class= 'one-fourth first';
	       
	       $size = 'medium';
		   $thumb = $img['sizes'][ $size ];
	       echo '<div class="'.$class.'"><a href="'.$img['url'].'" rel="lightbox"><img  src="'.$thumb.'"></a></div>';
	       echo "<div class='three-fourths bio-text'>".$bio.'</div>';
	       $i++;
	    endwhile;

	else :

	endif;
	echo '<div class="wrap"><div class="ref-program">';
	$ref = get_field('referral_program');
	echo $ref;
	echo '</div></div>';
}


//remove bottom gallery thing
remove_action('genesis_before_footer','our_jobs',1);

genesis();