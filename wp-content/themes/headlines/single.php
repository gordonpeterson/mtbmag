<?php
  $post = $wp_query->post;
  if (in_category('tech_corner')) {
      include(TEMPLATEPATH.'/template-techcorner.php');
  } 
  else{
      include(TEMPLATEPATH.'/single-default.php');
  }
?>