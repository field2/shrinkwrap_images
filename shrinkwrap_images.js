var plugindir = php_vars.plugindir;
var gifpath = '<img src="' + plugindir +   '" class="clear">';
var swimg = function() {
    jQuery("img").wrap('<div class="shrink"></div>');
    jQuery("img").after(gifpath);
};



jQuery(document).ready(function() {

    swimg();


});


jQuery(document).on('change', '#swipebox-overlay',function(){

   alert("gfdfgdf");


});