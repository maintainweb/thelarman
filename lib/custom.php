<?php
/**
 * Custom functions
 */
require_once locate_template('/lib/post-types.php'); 			// Custom Post Types
require_once locate_template('/lib/acf.php');          	// Advanced Custom Fields Additions


function count_columns() {
	$rows = get_field('column');
	$row_count = count($rows);

	echo $row_count;
}