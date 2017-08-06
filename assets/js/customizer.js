/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
/**


//color
.color-primary
.sub-menu li.current-menu-item > a
#header_nav_menu.light-menu > #accordion li.current-menu-item > a


//bg
 #submit
.comment-pagination .current


//border
.pp_button
.comment-pagination .current



//color
.color-primary
.sub-menu li.current-menu-item > a
.sub-menu li.current-menu-item > a:hover 
#header_nav_menu.light-menu > #accordion li.current-menu-item > a
#header_nav_menu.light-menu > #accordion li.current-menu-item > a:hover
.widget-area a:hover
div.postlist.row article .post-link:hover .post-title
div.postlist.row .post-with-sidebar article .post-permalink:hover .post-title
 div.postlist.row .post-with-sidebar article .post-cat a:hover
 .tab__item__link:hover 
a.leavereplybutton:hover
.reply a:hover, #cancel-comment-reply-link a:hover


//bg
.sub-menu li.current-menu-item > a:before
#header_nav_menu.light-menu > #accordion li.current-menu-item > a:before
div.postlist.row article .post-link:hover header:before
.wpb-load-more-comments:hover
 #submit
.page-numbers:hover, .comment-pagination .current



// border-color
.pp_button
a.leavereplybutton:hover
.wpb-load-more-comments:hover
 div.postlist.row .post-with-sidebar article .post-cat a:hover
.page-numbers:hover, .comment-pagination .current
 */









( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	wp.customize( 'tcx_link_color', function( value ) {
		value.bind( function( to ) {
			// $('.color-primary', '.sub-menu li.current-menu-item > a', '#header_nav_menu.light-menu > #accordion li.current-menu-item > a', '#header_nav_menu > #accordion li.current-menu-item > a').css( 'color', to );
			$( 'a.pp_button' ).css( 'borderColor', to );
		} );
	});

} )( jQuery );
