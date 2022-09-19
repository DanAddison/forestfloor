<?php
/**
 * These social icons are set in the Theme Settings options page
 */

$social_links = get_field( 'social_icons', 'option' ); ?>

<div class="social-icons">

  <h1 class="screen-reader-text">Social Media Links</h1>

  <ul class="menu menu--social">

    <?php foreach($social_links as $item) : ?>

    <li><a href="<?php echo $item['profile_link'] ?>" target="_blank"><span class="icon-<?php echo $item['social_network'] ?>"></span></a></li>

    <?php endforeach; ?>

  </ul>

</div>