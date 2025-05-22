// Get directory path of plugin directory
var plugindir = php_vars.plugindir;

// 
var gifpath = '<img src="' + plugindir + '" class="eol_si_clear">';

// Use jQuery to wrap each img tag in the shrinkwrap div
var eol_si_img = function() {
	jQuery("img").wrap('<div class="eol_si_shrink"></div><!-- /.eol_si_shrink -->');
	jQuery("img").after(gifpath);
};

// Run shrinkwrap on doc load
jQuery(document).ready(function() {
	eol_si_img();
});