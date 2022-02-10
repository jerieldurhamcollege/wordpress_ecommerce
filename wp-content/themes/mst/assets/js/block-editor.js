wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
} );
wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
} );


wp.blocks.registerBlockStyle( 'core/heading', {
    name: 'mst-heading',
    label: 'MST Heading',
} );
wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'mst-paragraph',
    label: 'MST Paragraph',
} );
