wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
    wp.blocks.unregisterBlockStyle( 'core/heading', 'default' );
} );


wp.blocks.registerBlockStyle( 'core/heading', {
    name: 'mst-heading',
    label: 'MST Heading',
} );
wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'mst-paragraph',
    label: 'MST Paragraph',
} );
wp.blocks.registerBlockStyle( 'core/list', {
    name: 'mst-list',
    label: 'MST List',
} );
wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'mst-quote',
    label: 'MST Quote',
} );
wp.blocks.registerBlockStyle( 'core/code', {
    name: 'mst-code',
    label: 'MST Code',
} );
wp.blocks.registerBlockStyle( 'core/preformatted', {
    name: 'mst-preformatted',
    label: 'MST Preformatted',
} );
