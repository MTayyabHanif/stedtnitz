/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
} )();
jQuery(document).on("ready int:ready", function() {
    var e = jQuery(".tab__name")
      , t = jQuery(".tab__items").hide();
    e.prependTo(".tabs-slice"),
    e.click(function(n) {
        n.preventDefault();
        var i = jQuery(this)
          , r = e.index(i);
        e.removeClass("tab__name--active"),
        i.addClass("tab__name--active"),
        t.hide().eq(r).show().parent().addClass('tab__container--active');
    }),
    e.first().click()
});