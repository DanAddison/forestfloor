<?php
$image = get_field('card_image');
$size = 'square';
$title = get_field('card_title');

$target = '_self';
$link_type = get_field('choose_link_type');

if( $link_type == 'page' ) {
  $link = get_field('page_link');
}

elseif( $link_type == 'external' ) {
  $link = get_field('external_link');
  $target = '_blank';
}
?>

<div class="block block-link-card">

  <a href="<?php echo $link; ?>" target="<?php echo $target; ?>">

    <div class="link-card__overlay">
      <h2><?php echo $title; ?></h2>
    </div>
    
    <div class="link-card__image">
      <?php echo wp_get_attachment_image( $image, $size ); ?>
    </div>

  </a>
	
</div>