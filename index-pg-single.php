<?php 	
/*

Template name: pg-single

*/

get_header(); 

$args = array( 'post_type' => 'Group Job');
$loop = new WP_Query( $args );
$loop->the_post();

if (get_post_type() == "groupjob") {
	include ("sectionMods/group-job.php");
} 

if (get_post_type() == "post") {
	include ("sectionMods/post-comum.php");
}

get_footer(); 
?>

