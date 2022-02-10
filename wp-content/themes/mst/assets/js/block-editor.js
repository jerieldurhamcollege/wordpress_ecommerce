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
wp.blocks.registerBlockStyle( 'core/table', {
    name: 'mst-table',
    label: 'MST Table',
} );
wp.blocks.registerBlockStyle( 'core/preformatted', {
    name: 'mst-preformatted',
    label: 'MST Preformatted',
} );
wp.blocks.registerBlockStyle( 'core/pullquote', {
    name: 'mst-pullquote',
    label: 'MST Pullquote',
} );
wp.blocks.registerBlockStyle( 'core/preformatted', {
    name: 'mst-preformatted',
    label: 'MST Preformatted',
} );
wp.blocks.registerBlockStyle( 'core/verse', {
    name: 'mst-verse',
    label: 'MST verse',
} );
wp.blocks.registerBlockStyle( 'core/image', {
    name: 'mst-image',
    label: 'MST Image',
} );
wp.blocks.registerBlockStyle( 'core/gallery', {
    name: 'mst-gallery',
    label: 'MST Gallery',
} );
wp.blocks.registerBlockStyle( 'core/audio', {
    name: 'mst-audio',
    label: 'MST Audio',
});
wp.blocks.registerBlockStyle( 'core/cover', {
    name: 'mst-cover',
    label: 'MST cover',
});
wp.blocks.registerBlockStyle( 'core/file', {
    name: 'mst-file',
    label: 'MST file',
});