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
wp.blocks.registerBlockStyle( 'core/media-text', {
    name: 'mst-media-text',
    label: 'MST Media Text',
});
wp.blocks.registerBlockStyle( 'core/video', {
    name: 'mst-video',
    label: 'MST Video',
});
wp.blocks.registerBlockStyle( 'core/button', {
    name: 'mst-button',
    label: 'MST Button',
});
wp.blocks.registerBlockStyle( 'core/column', {
    name: 'mst-column',
    label: 'MST Column',
});
wp.blocks.registerBlockStyle( 'core/group', {
    name: 'mst-group',
    label: 'MST Group',
});
wp.blocks.registerBlockStyle( 'core/more', {
    name: 'mst-more',
    label: 'MST More',
});
wp.blocks.registerBlockStyle( 'core/separator', {
    name: 'mst-separator',
    label: 'MST Separator',
});
wp.blocks.registerBlockStyle( 'core/spacer', {
    name: 'mst-spacer',
    label: 'MST Spacer',
});
wp.blocks.registerBlockStyle( 'core/archives', {
    name: 'mst-archives',
    label: 'MST Archives',
});
wp.blocks.registerBlockStyle( 'core/calendar', {
    name: 'mst-calendar',
    label: 'MST Calendar',
});
wp.blocks.registerBlockStyle( 'core/categories', {
    name: 'mst-categories',
    label: 'MST Categories',
});
wp.blocks.registerBlockStyle( 'core/html', {
    name: 'mst-html',
    label: 'MST HTML',
});
wp.blocks.registerBlockStyle( 'core/latest-comments', {
    name: 'mst-latest-comments',
    label: 'MST Latest Comments',
});
wp.blocks.registerBlockStyle( 'core/latest-posts', {
    name: 'mst-latest-posts',
    label: 'MST Latest posts',
});
wp.blocks.registerBlockStyle( 'core/post-title', {
    name: 'mst-post-title',
    label: 'MST Post Title',
});
wp.blocks.registerBlockStyle( 'core/post-excerpt', {
    name: 'mst-post-excerpt',
    label: 'MST Post Excerpt',
});
wp.blocks.registerBlockStyle( 'core/page-list', {
    name: 'mst-page-list',
    label: 'MST Page List',
});
wp.blocks.registerBlockStyle( 'core/rss', {
    name: 'mst-rss',
    label: 'MST RSS',
});
wp.blocks.registerBlockStyle( 'core/search', {
    name: 'mst-search',
    label: 'MST Search',
});
wp.blocks.registerBlockStyle( 'core/shortcode', {
    name: 'mst-shortcode',
    label: 'MST Shortcode',
});
wp.blocks.registerBlockStyle( 'core/social-link', {
    name: 'mst-social-link',
    label: 'MST Social Link',
});
wp.blocks.registerBlockStyle( 'core/social-links', {
    name: 'mst-social-links',
    label: 'MST Social Links',
});
wp.blocks.registerBlockStyle( 'core/tag-cloud', {
    name: 'mst-tag-cloud',
    label: 'MST Tag Cloud',
});