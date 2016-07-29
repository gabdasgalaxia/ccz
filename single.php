<?php 
get_header(); 

if (get_post_type() == "groupjob") {
	include ("sectionMods/group-job.php");
} 

if (get_post_type() == "post") {
	include ("sectionMods/post-comum.php");
} 

 get_footer();
?>

