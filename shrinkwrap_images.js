// Get directory path of plugin directory
var plugindir = php_vars.plugindir;

//
// var gifpath = 'url(' + plugindir + ')';

// Use jQuery to add eol_si class to images
jQuery( document ).on( 'ready', function() {
	jQuery( 'img' )
		.after( '<img src="data:image/gif;base64,R0lGODlhCgAKAIAAAP///wAAACH5BAEAAAAALAAAAAAKAAoAAAIIhI+py+0PYysAOw==" class="eol_shrink">' );
} );

// document.arrive( 'img', function() {
// 	if ( ! jQuery( this ).closest( '.eol_si_shrink' ).length ) {
// 		jQuery( this )
// 			.wrap( '<div class="eol_si_shrink"></div>' )
// 			.after( gifpath );
// 	}
// } );
