$(document).ready(function(){
	$('#slider').show();
}); 

$('#slider').revolution({
    delay:6000,                                             
    startheight: 480,
    startwidth: 1008,

    hideThumbs: 1000,

    navigationType: 'bullet', //bullet, thumb, none, both     (No Thumbs In FullWidth Version !)
    navigationArrows: ' verticalcentered', //nexttobullets, verticalcentered, none                          

    touchenabled: 'on', // Enable Swipe Function : on/off
    onHoverStop: 'on', // Stop Banner Timet at Hover on Slide on/off

    navOffsetHorizontal: 0,
    navOffsetVertical: 0,

    dottedOverlay: 'none',
    shadow: 0, //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
    fullWidth: 'on' // Turns On or Off the Fullwidth Image Centering in FullWidth Modus

});