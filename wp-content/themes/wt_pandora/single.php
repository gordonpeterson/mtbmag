<?php
/**
 * The Template for displaying all single posts.
 *
 * @package  WellThemes
 * @file     single.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>

<?php
  $post = $wp_query->post;

  if (in_category('9')) {
      include(TEMPLATEPATH.'/single-default.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>

