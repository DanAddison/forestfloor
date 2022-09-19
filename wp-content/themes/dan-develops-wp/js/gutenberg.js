
wp.domReady( function() {

  // SPACER BLOCK STYLE OPTIONS

  // unregister default stuff:
    wp.blocks.unregisterBlockStyle( 'core/spacer', {
    	name: 'default',
    	label: 'Default',
    });

    // register new style options
    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'manual-pixel-value',
      label: 'Manual (use pixel value)',
      isDefault: true,
    } );

    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'responsive-small',
      label: 'Responsive Small',
    } );
    
    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'responsive-medium',
      label: 'Responsive Medium',
    } );
    
    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'responsive-large',
      label: 'Responsive Large',
    } );

} );

/**
 * Add classnames to core paragraph, header and list blocks. Missing by default.
 */
wp.hooks.addFilter(
	'blocks.getSaveContent.extraProps',
	'da/block-filters',
	function( props, blockType, attributes ){
		
		const isClassEmpty = (typeof props.className === 'undefined' || !props.className) ? true : false

		if (blockType.name === 'core/heading') {
			return Object.assign(props, {
				className: isClassEmpty ? `block-heading` : `block-heading ${props.className}`,
			});
		}

		if (blockType.name === 'core/list') {
			return Object.assign(props, {
				className: isClassEmpty ? 'block-list' : `block-list ${props.className}`,
			});
		}

		if (blockType.name === 'core/paragraph') {
			return Object.assign(props, {
				className: isClassEmpty ? 'block-paragraph' : `block-paragraph ${props.className}`,
			});
		}

		return props;
	}
);
