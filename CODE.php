## 03_01

### [sass/style.scss](https://github.com/mor10/humescores/compare/03_01...03_02#diff-dd393be4fd7c82e1bd62a934500aa19d)

Theme Beschreibung im Kommentar-Header anpassen

## 03_03

### [functions.php](https://github.com/mor10/humescores/compare/03_03...03_04#diff-78cd5aa3783a74555c9938a2a81d01c6)

function humescores_scripts() anpassen um Google Fonts einzubinden
(Die Funktion heisst vielleicht anders, wenn Sie sie angepasst haben)

````php
+	// Enqueue Google Fonts: Source Sans Pro and PT Serif
+	wp_enqueue_style( 'humescores-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i|Source+Sans+Pro:400,400i,600,900' );
+
````



### [sass/variables-site/_typography.scss](https://github.com/mor10/humescores/compare/03_03...03_04#diff-f2a50f5e04f629706725914d5b1121e3)

Schriften definieren (neue Variablen)

````scss
$font__serif: 'PT Serif',Georgia,Cambria,"Times New Roman",Times,serif;
$font__sans: 'Source Sans Pro',"Lucida Grande","Lucida Sans Unicode","Lucida Sans",Geneva,Arial,sans-serif;
$font__code: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
$font__pre: "Courier 10 Pitch", Courier, monospace;
$font__line-height-body: 1.5;
$font__line-height-pre: 1.6;
````

```` scss
body,
button,
input,
select,
textarea {
	color: $color__text-main;
	font-family: $font__serif;
	@include font-size(1);
	line-height: $font__line-height-body;
}
````

### [sass/typography/_headings.scss](https://github.com/mor10/humescores/compare/03_03...03_04#diff-4879d0a247a732ed1644c45fb31e45b9)

````scss
h1, h2, h3, h4, h5, h6 {
	clear: both;
	font-family: $font__sans;
}
````



###03_04

### [functions.php](https://github.com/mor10/humescores/compare/03_04...03_05#diff-78cd5aa3783a74555c9938a2a81d01c6)

function humescores_fonts_url() 

````php
/**
 * Register custom fonts.
 */
function humescores_fonts_url() {
	$fonts_url = '';

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro and PT Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'humescores' );
	$pt_serif = _x( 'on', 'PT Serif font: on or off', 'humescores' );

	$font_families = array();
	
	if ( 'off' !== $source_sans_pro ) {
		$font_families[] = 'Source Sans Pro:400,400i,700,900';
	}
	
	if ( 'off' !== $pt_serif ) {
		$font_families[] = 'PT Serif:400,400i,700,700i';
	}
	
	
	if ( in_array( 'on', array($source_sans_pro, $pt_serif) ) ) {

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
````

function humescores_scripts()

````php
function humescores_scripts() {
	// Enqueue Google Fonts: Source Sans Pro and PT Serif
	wp_enqueue_style( 'humescores-fonts', humescores_fonts_url() );

````



### 03_06

### [functions.php](https://github.com/mor10/humescores/compare/03_06...03_07#diff-78cd5aa3783a74555c9938a2a81d01c6)

````scss
/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function humescores_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'humescores-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'humescores_resource_hints', 10, 2 );

````

## 03_07

### [sass/typography/_typography.scss](https://github.com/mor10/humescores/compare/03_07...03_08#diff-4de99d9aef5242043cdd78f41b840f04)

Schriftgrösse für mobile etwas verkleinern

````scss
body,
button,
input,
select,
textarea {
	color: $color__text-main;
	font-family: $font__serif;
	@include font-size(.9);
	line-height: $font__line-height-body;
	
	@media screen and (min-width: 700px) {
		@include font-size(1);
	}
}
````

### [sass/typography/_headings.scss](https://github.com/mor10/humescores/compare/03_07...03_08#diff-4879d0a247a732ed1644c45fb31e45b9)

Schriftgrössen für Headings anpassen

````scss
h1, h2, h3, h4, h5, h6 {
	clear: both;
	font-family: $font__sans;
}

h1 {
	font-size: 3em;
}

h2 {
	font-size: 2.6em;
}

h3 {
	font-size: 2.2em;
}

h4 {
	font-size: 2em;
}

h5 {
	font-size: 1.8em;
}

h6 {
	font-size: 1.6em;
}
````

### [sass/mixins/_mixins-master.scss](https://github.com/mor10/humescores/compare/03_07...03_08#diff-fce10964a3421817b28368ba81855365)

Schriftgrösse in rem definieren und Fallback in px

````scss
// Rem output with px fallback
@mixin font-size($sizeValue: 1) {
	font-size: ($sizeValue * 20) * 1px;
	font-size: $sizeValue * 1.25rem;
}
````

### [sass/layout/_global.scss](https://github.com/mor10/humescores/compare/03_08...03_08_end#diff-6794afcd3a5c118d1147a364a2c95d1e)

erstellen

````scss
.site-content {
	padding: 1em;
	
	@media screen and (min-width: $query__small) {
		padding: 2em;
	}
}
````



### [sass/layout/_content-sidebar.scss](https://github.com/mor10/humescores/compare/03_08...03_08_end#diff-6e4ce17e6e9adc3085caf633521d1e5f) und [sass/layout/_sidebar-content.scss](https://github.com/mor10/humescores/compare/03_08...03_08_end#diff-a33a89f242c8a2a05d28a85355023699)

löschen und aus 

### [sass/site/_site.scss](https://github.com/mor10/humescores/compare/03_08...03_08_end#diff-0424261d2e89f2927289622f46b4eb3b)

entfernen der Imports für die Layoutvarianten `content-sidebar`und `sidebar-content`

dafür einfügen des Imports für `global`

### [sass/style.scss](https://github.com/mor10/humescores/compare/03_08...03_08_end#diff-dd393be4fd7c82e1bd62a934500aa19d)

hier wurde zudem die Reihenfolge von `Widgets`und `Content` geändert, so dass zuerst `Content`importiert wird.

````scss
/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/
@import "site/site";

/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
@import "site/secondary/widgets";
````



##  04_01



Styling des Headers

### [sass/site/header/_header.scss](https://github.com/mor10/humescores/compare/03_08_end...04_01#diff-87781b0c0338b6c2da4973df5cf70180)

````scss
/*
.site-header {
	position: relative;
	padding: 1em;
	font-family: $font__sans;
	color: #fff;
	background-color: $color__skin;
	
	@media screen and (min-width: $query__small) {
		padding: 1em 2em;
	}
}
.site-branding {
	min-height: 65px;
}
.site-title {
	margin: 0;
	padding: 0;
	font-size: 1.6em;
	font-weight: 900;
	line-height: 1em;
	
	a {
		color: white;
		text-decoration: none;
		
		&:hover,
		&:focus {
			text-decoration: underline;
		}
	}
}
.site-description {
	margin: 0;
	font-size: .9em;
	font-style: italic;
	font-weight: 100;
}
*/
````





### [sass/typography/_typography.scss](https://github.com/mor10/humescores/compare/03_08_end...04_01#diff-4de99d9aef5242043cdd78f41b840f04)

Media Query variabel nutzen statt fixe Pixelbreite

````scss
body,
button,
input,
select,
textarea {
	color: $color__text-main;
	font-family: $font__serif;
	@include font-size(.9);
	line-height: $font__line-height-body;
	
	@media screen and (min-width: $query__small) {
		@include font-size(1);
	}
}
````

### [sass/variables-site/_colors.scss](https://github.com/mor10/humescores/compare/03_08_end...04_01#diff-d531e78be4cf25d2c8c9f636e6543f3b)

Farbe für Skin definieren

````scss
$color__skin: #002254; // Header etc
````



### [sass/site/header/_header.scss](https://github.com/mor10/humescores/compare/04_01...04_02#diff-87781b0c0338b6c2da4973df5cf70180)

Header anpassen und Anpassungen importieren

````scss

@media screen and (min-width: $query__medium) {
	.site-header {
		display: flex;
		justify-content: space-between;
	}
	
	.site-branding {
		width: 35%;
	}
	
	.site-navigation {
		width: 55%;
	}
}
````

### [sass/site/_site.scss](https://github.com/mor10/humescores/compare/04_01...04_02#diff-0424261d2e89f2927289622f46b4eb3b)

````scss
/*--------------------------------------------------------------
## Header
--------------------------------------------------------------*/
@import "header/header";
````



## 04_02

### [header.php](https://github.com/mor10/humescores/compare/04_02...04_03#diff-1c1ae65fe9828eb6d3cee4edacf90018)

Headerbild HTML5 Style mit `</figure>`

````php
<?php if ( get_header_image() ) : ?>
	<figure class="header-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
		</a>
	</figure><!-- .header-image -->
	<?php endif; // End header image check. ?>
````

### [inc/custom-header.php](https://github.com/mor10/humescores/compare/04_02...04_03#diff-7bf8f1d3e4af64e831d7f9e8d852959b)

Headerbild Styling

````php
function humescores_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'humescores_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 2000,
		'height'                 => 850,
		'flex-height'            => true,
		'wp-head-callback'       => 'humescores_header_style',
	) ) );
}
````



### [sass/elements/_elements.scss](https://github.com/mor10/humescores/compare/04_02...04_03#diff-5645c9072565d0648a8958c8729b148a)

Figure stylen

````scss
figure {
	margin: 0; /* Extra wide images within figure tags don't overflow the content area. */
}
````



### [sass/site/header/_header.scss](https://github.com/mor10/humescores/compare/04_02...04_03#diff-87781b0c0338b6c2da4973df5cf70180)

````scss
.header-image {
	max-height: 60vh;
	overflow: hidden;
	
	img {
		display: block;
		width: 100vw;
	}
}
````



## 04_03

### [header.php](https://github.com/mor10/humescores/compare/04_03...04_04#diff-1c1ae65fe9828eb6d3cee4edacf90018)

Header Image nur auf Homepage

````php
<?php if ( get_header_image() && is_front_page() ) : ?>
````



## 04_04

### [functions.php](https://github.com/mor10/humescores/compare/04_04...04_05#diff-78cd5aa3783a74555c9938a2a81d01c6)

Theme Support für Custom Logi in `humescores_setup()`Funktion einfügen

````php
// Add theme support for Custom Logo
	add_theme_support( 'custom-logo', array(
		'width' => 90,
		'height' => 90,
		'flex-width' => true,
	));
````



## [header.php](https://github.com/mor10/humescores/compare/04_04...04_05#diff-1c1ae65fe9828eb6d3cee4edacf90018)

Custom Logo im Header einfügen

````php
<div class="site-branding">
    
    <?php the_custom_logo(); ?>
    <div class="site-branding__text">
    <?php
    if ( is_front_page() && is_home() ) : ?>

      ...
      
    <?php
    endif; ?>
    </div><!-- .site-branding__text -->
</div><!-- .site-branding -->


````



### [sass/site/header/_header.scss](https://github.com/mor10/humescores/compare/04_04...04_05#diff-87781b0c0338b6c2da4973df5cf70180)

````scss
.site-branding {
	display: flex;
	min-height: 65px;
}

.custom-logo-link {
	margin-right: 1em;
	img {
		display: block;
		height: 65px;
		width: auto;
	}
}

.site-branding__text {
	display: flex;
	flex-direction: column;
	justify-content: center;
	height: 65px;
}
````



### [sass/modules/_clearings.scss](https://github.com/mor10/humescores/compare/04_05...04_05_end#diff-722e983efe4d6de13d00c5697a866177)



### [sass/site/header/_header.scss](https://github.com/mor10/humescores/compare/04_05...04_05_end#diff-87781b0c0338b6c2da4973df5cf70180)

## 05_01

### [functions.php](https://github.com/mor10/humescores/compare/05_01...05_02#diff-78cd5aa3783a74555c9938a2a81d01c6)

Navigationsmenü in den Header setzen

````php
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Header', 'humescores' ),
	) );
````

### [sass/site/header/_header-menu.scss](https://github.com/mor10/humescores/compare/05_01...05_02#diff-f8d2edcc7c98b5b442f91c890a254ef3)

Navigationsmenü responsive stylen

````scss
.main-navigation {
	display: block;
	
	font-family: $font__sans;
	font-weight: 400;
	clear: left;
	
	ul {
		display: none;
		list-style: none;
		margin: 0;
		padding-top: 1em;
		padding-left: 0;

		ul {
			display: none;
			top: 1.5em;
			z-index: 99999;

			ul {
				top: 0;
			}

			li {
				padding-left: 1em;
				
				&:hover > ul,
				&.focus > ul {
					left: 100%;
				}
			}

			a {
				width: 200px;
			}
		}

		li:hover > ul,
		li.focus > ul {
			left: auto;
		}
	}

	li {
		position: relative;
	}

	a {
		display: inline-block;
		width: 100%;
		padding: .5em 1em .5em 0;
		text-decoration: none;
		color: #fff;
	}
	
	a:hover,
	a:focus {
		text-decoration: underline;
	}

	.current_page_item > a,
	.current-menu-item > a,
	.current_page_ancestor > a,
	.current-menu-ancestor > a {
	}
	
	.menu-item-has-children,
	.page-item-has-children {
		min-width: 218px;
	}
	.menu-item-has-children > a,
	.page_item_has_children > a {
		padding-right: 2em;
	}
}

button.dropdown-toggle {
	position: absolute;
	right: 0;
	border: none;
	background: inherit;
	color: white;
	line-height: 1.5em;
	padding: .4em 1em .4em .5em;
}

.menu-toggle {
	position: absolute;
	top: 0;
	right: 0;
	display: block;
	margin: 1.2em 1.2em 0 0;
	padding: .6em .8em;
	font-size: 80%;
	text-transform: uppercase;
	color: white;
	border: 1px solid hsla(0, 0%, 100%, .3);
}

/* Toggle small menu and sub-menus on */
.toggled-on ul,
.sub-menu.toggled-on {
	display: block;
}

@media screen and (min-width: $query__small) {
	.menu-toggle {
		display: none;
	}
	
	.main-navigation {
		
		.menu-item-has-children > a,
		.page_item_has_children > a {
			padding-right: 2em;
			background: hsla(0, 0%, 100%, .1);
		}
		
		ul {
			display: block;
			display: flex;
			flex-wrap: wrap;
			
			ul {
				flex-direction: column;
				background: hsla(0, 0%, 100%, .1);
				margin-left: 0;

				li {
					padding-left: 0;
					
					a {
						width: 218px;
						background: none;
					}
				}
			}
			
			li {
					
				a {
					padding: .4em 1em; 
				}
			}
		}
		
	}
}

@media screen and (min-width: $query__medium) {
	.main-navigation {
		
		ul {
			justify-content: flex-end;
			padding-top: 0;
		}
		
	}
}
````

## 05_02

### [sass/navigation/_menus.scss](https://github.com/mor10/humescores/compare/05_02...05_03#diff-a0d34fb91a5f972fb94a85de774e69af)

Menü stylen in `sass/site/header/_header-menu.scss`

Datei löschen

### [sass/site/header/_header-menu.scss](https://github.com/mor10/humescores/compare/05_02...05_03#diff-f8d2edcc7c98b5b442f91c890a254ef3)



````scss
.main-navigation {
	display: block;

	font-family: $font__sans;
	font-weight: 400;
	clear: left;

	ul {
		display: none;
		list-style: none;
		margin: 0;
		padding-top: 1em;
		padding-left: 0;

		ul {
			display: none;
			top: 1.5em;
			z-index: 99999;

			ul {
				top: 0;
			}

			li {
				padding-left: 1em;

				&:hover > ul,
				&.focus > ul {
					left: 100%;
				}
			}

			a {
				width: 200px;
			}
		}

		li:hover > ul,
		li.focus > ul {
			left: auto;
		}
	}

	li {
		position: relative;
	}

	a {
		display: inline-block;
		width: 100%;
		padding: .5em 1em .5em 0;
		text-decoration: none;
		color: #fff;
	}

	a:hover,
	a:focus {
		text-decoration: underline;
	}

	.current_page_item > a,
	.current-menu-item > a,
	.current_page_ancestor > a,
	.current-menu-ancestor > a {
	}

	.menu-item-has-children,
	.page_item_has_children {
		min-width: 218px;
	}
	.menu-item-has-children > a,
	.page_item_has_children > a {
		padding-right: 2em;
	}
}

button.dropdown-toggle {
	position: absolute;
	right: 0;
	border: none;
	background: inherit;
	color: white;
	line-height: 1.5em;
	padding: .4em 1em .4em .5em;
}

.menu-toggle {
	position: absolute;
	top: 0;
	right: 0;
	display: block;
	margin: 1.2em 1.2em 0 0;
	padding: .6em .8em;
	font-size: 80%;
	text-transform: uppercase;
	color: white;
	border: 1px solid hsla(0, 0%, 100%, .3);
}

/* Toggle small menu and children on */
.toggled-on ul,
.sub-menu.toggled-on {
	display: block;
}

@media screen and (min-width: $query__small) {
	.menu-toggle {
		display: none;
	}

	.main-navigation {

		.menu-item-has-children > a,
		.page_item_has_children > a {
			padding-right: 2em;
			background: hsla(0, 0%, 100%, .1);
		}

		ul {
			display: block;
			display: flex;
			flex-wrap: wrap;

			ul {
				flex-direction: column;
				background: hsla(0, 0%, 100%, .1);
				margin-left: 0;

				li {
					padding-left: 0;

					a {
						width: 218px;
						background: none;
					}
				}
			}

			li {

				a {
					padding: .4em 1em;
				}
			}
		}

	}

}

@media screen and (min-width: $query__medium) {
	.main-navigation {

		ul {
			justify-content: flex-end;
			padding-top: 0;

			/* If you want dropdowns to open on hover, uncomment this: */
			/*
			li:hover > ul,
				li:focus > ul {
				display: block;
			}
			*/
		}

	}
}
````

### [sass/site/header/_header.scss](https://github.com/mor10/humescores/compare/05_02...05_03#diff-87781b0c0338b6c2da4973df5cf70180)

kontrollieren, dass das richtige Menü importiert wird

````scss
/*
Header Menu
*/
@import "header-menu";
````



## 05_03

### [js/navigation.js](https://github.com/mor10/humescores/compare/05_03...05_04#diff-aabfb6e30bb467804b6ef0a0457e0f82)

Accessibility verbessern

````js
/* global humescoresScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {
	var masthead, menuToggle, siteNavigation;

	function initMainNavigation( container ) {

		// Add dropdown toggle that displays child menu items.
		var dropdownToggle = $( '<button />', { 'class': 'dropdown-toggle', 'aria-expanded': false })
			.append( $( '<span />', { 'class': 'dropdown-symbol', text: '+' }) )
			.append( $( '<span />', { 'class': 'screen-reader-text', text: humescoresScreenReaderText.expand }) );

		container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).after( dropdownToggle );

		// Toggle buttons and submenu items with active children menu items.
		container.find( '.current-menu-ancestor > button' ).addClass( 'toggled-on' );
		container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

		container.find( '.dropdown-toggle' ).click( function( e ) {
			var _this = $( this ),
				screenReaderSpan = _this.find( '.screen-reader-text' );
          		dropdownSymbol = _this.find( '.dropdown-symbol' );
				dropdownSymbol.text( dropdownSymbol.text() === '-' ? '+' : '-');


			e.preventDefault();
			_this.toggleClass( 'toggled-on' );
			_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );

			_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );

			screenReaderSpan.text( screenReaderSpan.text() === humescoresScreenReaderText.expand ? humescoresScreenReaderText.collapse : humescoresScreenReaderText.expand );
		});
	}

	initMainNavigation( $( '.main-navigation' ) );

	masthead       = $( '#masthead' );
	menuToggle     = masthead.find( '.menu-toggle' );
	siteNavigation = masthead.find( '.main-navigation > div > ul' );

	// Enable menuToggle.
	(function() {

		// Return early if menuToggle is missing.
		if ( ! menuToggle.length ) {
			return;
		}

		// Add an initial values for the attribute.
		menuToggle.add( siteNavigation ).attr( 'aria-expanded', 'false' );

		menuToggle.on( 'click.humescores', function() {
			$( siteNavigation.closest( '.main-navigation' ), this ).toggleClass( 'toggled-on' );

			$( this )
				.add( siteNavigation )
				.attr( 'aria-expanded', $( this ).add( siteNavigation ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		});
	})();

	// Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
	(function() {
		if ( ! siteNavigation.length || ! siteNavigation.children().length ) {
			return;
		}

		// Toggle `focus` class to allow submenu access on tablets.
		function toggleFocusClassTouchScreen() {
			if ( 'none' === $( '.menu-toggle' ).css( 'display' ) ) {

				$( document.body ).on( 'touchstart.humescores', function( e ) {
					if ( ! $( e.target ).closest( '.main-navigation li' ).length ) {
						$( '.main-navigation li' ).removeClass( 'focus' );
					}
				});

				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a' )
					.on( 'touchstart.humescores', function( e ) {
						var el = $( this ).parent( 'li' );

						if ( ! el.hasClass( 'focus' ) ) {
							e.preventDefault();
							el.toggleClass( 'focus' );
							el.siblings( '.focus' ).removeClass( 'focus' );
						}
					});

			} else {
				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a' ).unbind( 'touchstart.humescores' );
			}
		}

		if ( 'ontouchstart' in window ) {
			$( window ).on( 'resize.humescores', toggleFocusClassTouchScreen );
			toggleFocusClassTouchScreen();
		}

		siteNavigation.find( 'a' ).on( 'focus.humescores blur.humescores', function() {
			$( this ).parents( '.menu-item, .page_item' ).toggleClass( 'focus' );
		});
	})();

	// Add the default ARIA attributes for the menu toggle and the navigations.
	function onResizeARIA() {
		if ( 'block' === $( '.menu-toggle' ).css( 'display' ) ) {

			if ( menuToggle.hasClass( 'toggled-on' ) ) {
				menuToggle.attr( 'aria-expanded', 'true' );
			} else {
				menuToggle.attr( 'aria-expanded', 'false' );
			}

			if ( siteNavigation.closest( '.main-navigation' ).hasClass( 'toggled-on' ) ) {
				siteNavigation.attr( 'aria-expanded', 'true' );
			} else {
				siteNavigation.attr( 'aria-expanded', 'false' );
			}
		} else {
			menuToggle.removeAttr( 'aria-expanded' );
			siteNavigation.removeAttr( 'aria-expanded' );
			menuToggle.removeAttr( 'aria-controls' );
		}
	}

	$( document ).ready( function() {
		$( window ).on( 'load.humescores', onResizeARIA );
		$( window ).on( 'resize.humescores', onResizeARIA );
	});

})( jQuery );
````



### [functions.php](https://github.com/mor10/humescores/compare/05_03...05_04#diff-78cd5aa3783a74555c9938a2a81d01c6)

Accessibility verbessern (Zeilen 178 - 182)

````php
/**
 * Enqueue scripts and styles.
 */
function humescores_scripts() {
	// Enqueue Google Fonts: Source Sans Pro and PT Serif
	wp_enqueue_style( 'humescores-fonts', humescores_fonts_url() );
	
	wp_enqueue_style( 'humescores-style', get_stylesheet_uri() );
	wp_enqueue_script( 'humescores-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_localize_script( 'humescores-navigation', 'humescoresScreenReaderText', array(
		'expand' => __( 'Expand child menu', 'humescores'),
		'collapse' => __( 'Collapse child menu', 'humescores'),
	));
	wp_enqueue_script( 'humescores-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'humescores_scripts' );

````



### [sass/site/header/_header-menu.scss](https://github.com/mor10/humescores/compare/05_03...05_04#diff-f8d2edcc7c98b5b442f91c890a254ef3)

Menu Styling anpassen

````scss
/* Toggle small menu and children on */
.toggled-on ul,
.sub-menu.toggled-on {
	display: block;
}
````

### [header.php](https://github.com/mor10/humescores/compare/05_04...05_04_end#diff-1c1ae65fe9828eb6d3cee4edacf90018)

````php
<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'humescores' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
````

### [sass/forms/_buttons.scss](https://github.com/mor10/humescores/compare/05_04...05_04_end#diff-f427f41cbf700f954b9689b552a07d0f)

Button anpassen

````scss
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	border: 2px solid;
	border-color: black;
	background: transparent;
	color: black;
	font-family: $font__sans;
	@include font-size(1);
	line-height: 1;
	padding: .5em 1em;

	&:hover ,
	&:active,
	&:focus {
		background: white;
		color: black;
	}
}
````



## 05_05

### [functions.php](https://github.com/mor10/humescores/compare/05_05...05_06_end#diff-78cd5aa3783a74555c9938a2a81d01c6)

Social Menü in Footer ermöglichen durch Anpassen der Funktion `register_nav_menus()`

````php
register_nav_menus( array(
		'primary' => esc_html__( 'Header', 'humescores' ),
		'social' => esc_html__( 'Social Media Menu', 'humescores' ),
	) );
````



### [footer.php](https://github.com/mor10/humescores/compare/05_05...05_06_end#diff-44390cabf006de0249316ec5093ed0c6)

Social Menü im Footer einbinden

````php
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
		// Make sure there is a social menu to display.
		if ( has_nav_menu( 'social' ) ) { ?>
		<nav class="social-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
		</nav><!-- .social-menu -->
		<?php } ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'humescores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'humescores' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'humescores' ), 'humescores', '<a href="https://mor10.com/courses" rel="designer">Morten Rand-Hendriksen</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
````



### [sass/site/footer/_footer.scss](https://github.com/mor10/humescores/compare/05_05...05_06_end#diff-12dcfcbdb720828bc21a95dc698c6dd5)

Social Menü stylen

````scss
.site-footer {
	position: relative;
	padding: 1em;
	font-family: $font__sans;
	color: #fff;
	background-color: $color__skin;
	text-align: center;
	
	@media screen and (min-width: $query__small) {
		padding: 1em 2em;
	}
}

.social-menu {
	ul {
		display: flex;
		justify-content: center;
		list-style-type: none;
		margin: 0;
		padding: 0;
		
		a {
			display: block;
			padding: .5em 1em;
			color: white;
			text-decoration: none;
			
			&:hover,
			&:focus {
				text-decoration: underline;
			}
		}
	}
}
````



## 06_03

### [inc/template-tags.php](https://github.com/mor10/humescores/compare/06_03...06_04_end#diff-5915276465e785d5f7897d71685fca5f)

Funktionen `humescores_posted_on`und `humescores_entry_footer`anpassen



````php
if ( ! function_exists( 'humescores_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function humescores_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Published %s', 'post date', 'humescores' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'Written by %s', 'post author', 'humescores' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="byline"> ' . $byline . '</span> <span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
	
	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo ' <span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'humescores' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}
	
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'humescores' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		' <span class="edit-link">',
		'</span>'
	);

}
endif;
````



````php
if ( ! function_exists( 'humescores_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function humescores_entry_footer() {
	// Hide tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'humescores' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'humescores' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}
}
endif;
````



### [sass/site/primary/_posts-and-pages.scss](https://github.com/mor10/humescores/compare/06_03...06_04_end#diff-01827e7040137777b4b5b14e7e8b549d)

Meta Daten stylen

````scss
.entry-header {
	font-family: $font__sans;
}

.cat-links {
	font-size: 90%;
	font-weight: 700;
	
	a {
		text-decoration: none;
		text-transform: uppercase;
		color: $color__interactive;
		
		&:focus,
		&:hover {
			background-color: $color__interactive;
			color: white;
		}
	}
}

.entry-title {
	margin: .125em 0 .25em;
	font-size: 2.5em;
	
	@media screen and (min-width: $query__medium) {
		font-size: 3em;
	}
	
	a {
		text-decoration: none;
		color: black;
		
		&:focus,
		&:hover {
			border-bottom: 5px solid $color__interactive;
		}
	}
}

.entry-meta {
	font-size: 90%;
	
	a {
		font-weight: 700;
		text-decoration: none;
		color: black;
		
		&:focus,
		&:hover {
			color: black;
			border-bottom: 3px solid $color__interactive;
		}
	}
}

.byline {
	&::after {
		content: "|";
		margin: 0 .5em;
	}
}

.comments-link,
.edit-link {
	&::before {
		content: "|";
		margin: 0 .5em;
	}
}

.byline,
.updated:not(.published){
	display: none;
}

.single .byline,
.group-blog .byline {
	display: inline;
}
````



### [sass/variables-site/_colors.scss](https://github.com/mor10/humescores/compare/06_03...06_04_end#diff-d531e78be4cf25d2c8c9f636e6543f3b)

Farben der Links anpassen

````scss
$color__interactive: #b51c35; // Links, highlights, etc.
````



## 

## 07_02

### [inc/extras.php](https://github.com/mor10/humescores/compare/07_02...07_03#diff-eb299bdc934d7bcc4d3c4b9c85c0e867)

Klasse zum Unterscheiden, ob eine Sidebar Widgets enthält

````php
// Add a class telling us if the sidebar is in use.
	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'has-sidebar';
	} else {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'humescores_body_classes' );
````



## 07_03

### [sass/layout/_global.scss](https://github.com/mor10/humescores/compare/07_03...07_04#diff-6794afcd3a5c118d1147a364a2c95d1e)

Vorbereiten Styles für Sidebar mit Widget

````scss
/*
.site-content {
	max-width: $size__max-width;
	margin: 0 auto;
}
@media screen and (min-width: $query__medium) {
	.has-sidebar {
		
		.hentry {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			
			.entry-header {
				width: 100%;
				flex: 1 0 100%;
			}
			
			.post-content {
				width: $size__ratio-large;
			}
			
			.widget-area {
				width: $size__ratio-small;
			}
		}
		
	}
}
*/
````



## 07_05

### [inc/template-tags.php](https://github.com/mor10/humescores/compare/07_05...07_06#diff-5915276465e785d5f7897d71685fca5f)

Klassen zur Styling von Links in `function humescores_posted_on()`erstellen

````php
function humescores_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}
	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
	$posted_on = sprintf(
		esc_html_x( 'Published %s', 'post date', 'humescores' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
	$byline = sprintf(
		esc_html_x( 'Written by %s', 'post author', 'humescores' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span class="byline"> ' . $byline . '</span> <span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
	
	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo ' <span class="comments-link"><span class="extra">Discussion </span>';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'humescores' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}
	
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'humescores' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		' <span class="edit-link"><span class="extra">Admin </span>',
		'</span>'
	);
}
````



### [sass/layout/_global.scss](https://github.com/mor10/humescores/compare/07_05...07_06#diff-6794afcd3a5c118d1147a364a2c95d1e)

````scss
/*
@media screen and (min-width: $query__medium) {
	.no-sidebar {
		.post-content__wrap {
			display: flex;
			justify-content: space-between;
			.entry-meta {
				width: 20%;
			}
			.post-content__body {
				width: 70%;
			}
		}
	}
}
*/
````



### [sass/site/primary/_posts-and-pages.scss](https://github.com/mor10/humescores/compare/07_05...07_06#diff-01827e7040137777b4b5b14e7e8b549d)

````scss
.extra {
	display: none;
}

/* Custom Post Meta rules for single post / no sidebar. */

.no-sidebar {

	.entry-meta {
		margin-top: 1.5em;
	}

	@media screen and (min-width: $query__medium) {
		.post-content__wrap {

			.entry-meta {
				margin-top: 2.25em;
				font-size: 80%;

				a {
					font-size: 110%;
					display: block;
					border-bottom: 3px solid white;

					&:hover,
					&:focus {
						border-bottom-color: $color__interactive;
					}
				}
			}

			.byline,
			.posted-on,
			.comments-link,
			.edit-link {
				display: block;
				margin-bottom: 1em;

				&:before,
				&:after {
					margin: 0;
					content: "";
				}
			}

			.extra {
				display: inline;
			}
		}

	}
}
````



### [template-parts/content-single.php](https://github.com/mor10/humescores/compare/07_03...07_04#diff-274bf6731ba780ff7d45da84892847da)

Sidebar nicht einbinden

````php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'single' );
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
````

## 08_02

### [comments.php](https://github.com/mor10/humescores/compare/08_02...08_03#diff-3301f48a33589a7bfe66d131714e43d3)

Gravatar anzeigen

````php
<ol class="comment-list">
    <?php
        wp_list_comments( array(
            'style'      => 'ol',
            'short_ping' => true,
            'avatar_size' => '96',
        ) );
    ?>
</ol><!-- .comment-list -->
````

### [footer.php](https://github.com/mor10/humescores/compare/08_02...08_03#diff-44390cabf006de0249316ec5093ed0c6)

````php
<footer id="colophon" class="site-footer" role="contentinfo">
<?php
// Make sure there is a social menu to display.
if ( has_nav_menu( 'social' ) ) { ?>
<nav class="social-menu">
<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
</nav><!-- .social-menu -->
<?php } ?>
````

### [sass/site/primary/_comments.scss](https://github.com/mor10/humescores/compare/08_02...08_03#diff-89550c88e107b75eca78a9c48c701f5f)

````scss
.comments-area {
	width: 100%;
	margin: 3em 0;
	padding: 1.5em 0;
	border-top: 1px solid hsl(0, 0%, 80%);
}

.comments-title {
	margin-bottom: 2em;
	font-size: 2.5em;
	font-weight: 900;
}

.comment-list {
	padding: 0;
	margin: 0;
	list-style-type: none;

	ol {
		list-style-type: none;
	}
}

.comment-body {
	border-bottom: 1px solid #c3c3c3;
	margin-bottom: 3em;
}

.comment-meta {
	position: relative;
	margin-left: 70px;
	font-family: $font__sans;
	font-size: 80%;
}

.comment-meta,
.comment-form {
	a {
		text-decoration: none;
		border: none;

		&:hover,
		&:focus {
			text-decoration: underline;
		}
	}
}

.comment {

	.avatar {
		position: absolute;
		top: -5px;
		left: -70px;
		width: 50px;
		height: 50px;
		border-radius: 50px;
	}

}

.children {
	margin-left: 1em;
	padding-left: 0;

	@media screen and (min-width: $query__medium) {
		margin-left: 2em;
	}
}

.no-sidebar {

	.children {

		@media screen and (min-width: $query__medium) {

			margin-left: 2em;

			.comment-meta {
				margin-left: 80px;
				font-size: 90%;
			}

			.comment .avatar {
				top: -7px;
				left: -80px;
				width: 60px;
				height: 60px;
			}

			.comment-content {
				margin-left: 80px;
			}

		}
	}


	@media screen and (min-width: $size__max-width) {

		.children {
			margin-left: 3em;
		}

		.comment-meta {
			margin-left: 90px;
		}

		.comment .avatar {
			top: -8px;
			left: -90px;
			width: 70px;
			height: 70px;
		}

		.comment-content {
			margin-left: 90px;
		}
	}
}



.comment-metadata {
    margin-top: .2em;
	padding-bottom: .5em;
	font-size: .8em;
	line-height: 1em;

	a {
		color: #7D7D7D;

		&:hover,
		&:focus {
			border-color: #c3c3c3;
		}
	}
}

.comment-author {
	font-size: 1.4em;
	line-height: 1.3em;
}

.says {
	font-size: 80%;
}

.reply {
	margin-bottom: 1.5em;
	text-align: right;

	a {
		display: inline-block;
		padding: .5em 1.4em;
		font-family: $font__sans;
		font-size: 85%;
		color: #000;
		line-height: 1.3em;
		text-decoration: none;
		border: 1px solid #c3c3c3;

		&:hover,
		&:focus {
			color: #fff;
			background: $color__interactive;
			border-color: $color__interactive;
		}
	}
}


.comment-content {

	ol {
		list-style-type: decimal;
	}

	a {
		word-wrap: break-word;
	}

}
````

## 08_03

### [sass/site/primary/_comments.scss](https://github.com/mor10/humescores/compare/08_04...08_04_end#diff-89550c88e107b75eca78a9c48c701f5f)

````scss
.bypostauthor .avatar {
	box-sizing: content-box;
	border: 5px solid $color__interactive;
	margin-top: -5px;
	margin-left: -5px;
}
````

## 08_06

### [comments.php](https://github.com/mor10/humescores/compare/08_06...08_06_end#diff-3301f48a33589a7bfe66d131714e43d3)

````php
<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'humescores' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>
````

### [footer.php](https://github.com/mor10/humescores/compare/08_06...08_06_end#diff-44390cabf006de0249316ec5093ed0c6)

````php
<footer id="colophon" class="site-footer" role="contentinfo">
    <?php
    // Make sure there is a social menu to display.
    if ( has_nav_menu( 'social' ) ) { ?>
    <nav class="social-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
    </nav><!-- .social-menu -->
    <?php } ?>

    <div class="site-info">
        <a href="<?php
        // Make sure there is a social menu to display.
        if ( has_nav_menu( 'social' ) ) { ?><?php echo esc_url( __( 'https://wordpress.org/', 'humescores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'humescores' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'humescores' ), 'humescores', '<a href="https://mor10.com/courses" rel="designer">Morten Rand-Hendriksen</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
````

