<?php 

if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page(array(
        'title' => 'Branding Options'
    ));
    acf_add_options_sub_page(array(
        'title' => 'Social & Analytics'
    ));
    acf_add_options_sub_page(array(
        'title' => 'JavaScript Extras'
    ));
}
