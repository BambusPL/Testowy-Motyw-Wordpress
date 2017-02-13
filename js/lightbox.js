



jQuery.noConflict();
 
(function( $ ) {
    $(document).on('click', '[data-toggle="lightbox"]', function(Event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
})( jQuery );