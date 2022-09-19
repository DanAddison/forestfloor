<?php
/**
 * If I need to extend SEO Framework to grab content from an ACF field for the meta-description
 * Otherwise it just uses an excerpt from post_content
*/

// function da_seo_framework_description($description, $args) {
//   if (empty($description)) {
//     $description = ''; // Add your own logic here!
//   }
//   return $description;
// }
// add_filter('the_seo_framework_custom_field_description', 'da_seo_framework_description', 10, 2);
// add_filter('the_seo_framework_generated_description', 'da_seo_framework_description', 10, 2);
// add_filter('the_seo_framework_fetched_description_excerpt', 'da_seo_framework_description', 10, 2);