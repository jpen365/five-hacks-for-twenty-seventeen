// One page nav code 

jQuery( document ).ready(function(){
  /* Add padding and id's to each front page section */
  jQuery( "h2.entry-title" ).each( function() {
    var panelId = jQuery( this ).html().toLowerCase().replace(/\s+/g, "-");
      jQuery( this ).wrapInner(function() {
        return "<span style='padding-top:96px;' id='" + panelId + "'></span>";
      })
  })
    
  /* Remove navigation link highlighting */
    jQuery('#top-menu li').removeClass('current-menu-item current_page_item ');
  
  /* Add highlighting on click */
    jQuery('#top-menu li a').on('click', function(event) {
    jQuery(this).parent().parent().find('li').removeClass('current-menu-item');
    jQuery(this).parent().addClass('current-menu-item');
  });
  
    /* Check current URL and highlight nav for current page */
  jQuery('#top-menu li a').each( function() {
      var pageUrl = jQuery( location ).attr( 'href' );
      var navUrl = jQuery( this ).attr( 'href' );
      if ( navUrl == pageUrl ) {
          jQuery( this ).parent().addClass('current-menu-item');
        } 
    })
})


// Sticky nav on pages and posts

var body = jQuery( 'body' );
var navigation = body.find( '.navigation-top' );
var customHeader = body.find( '.custom-header' );
var navigationOuterHeight = navigation.outerHeight();
if ( body.hasClass( 'has-header-image' ) ) {
  var headerOffset = customHeader.innerHeight() - navigationOuterHeight;
}
jQuery( window ).on( 'scroll', function() {
  if ( jQuery( window ).scrollTop() >= headerOffset ) {
    navigation.addClass( 'site-navigation-fixed' );
  } else {
    navigation.removeClass( 'site-navigation-fixed' );
  }
});