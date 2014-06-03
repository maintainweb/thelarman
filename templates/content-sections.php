<?php

if( have_rows('sections') ):
 	global $r;
 	$r = 0;
    while ( have_rows('sections') ) : the_row();
        if( get_row_layout() == 'jumbotron' ):
        	get_template_part('templates/section', 'jumbotron');
       	endif;
        if( get_row_layout() == 'banner' ):
        	get_template_part('templates/section', 'banner');
        endif;
        if( get_row_layout() == 'sequence' ):
        	get_template_part('templates/content', 'sequence');
        endif;
        if( get_row_layout() == 'call_to_action' ):
        	get_template_part('templates/section', 'call-to-action');
        endif;
        if( get_row_layout() == 'columns' ):
        	get_template_part('templates/section', 'columns');
 		endif;
 	$r++;
    endwhile;
 
else :
 
    // no layouts found
 
endif;
 
?>