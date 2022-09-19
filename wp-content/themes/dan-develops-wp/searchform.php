<?php
/**
 * My custom search form
 * 
 * ' get_search_form(); ' will call this in (or the WP default searchform if this file doesn't exist)
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
		
		<i class="icon-search"></i>

		<!-- <button type="submit" class="search-submit"><i class="icon-search"></i></button> -->

		<!-- restrict search to products only -->
		<!-- <input type="hidden" value="product" name="post_type" id="post_type" /> -->
	</label>
</form>