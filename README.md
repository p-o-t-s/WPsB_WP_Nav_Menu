# WPsB WP Nav Menu

It is a wrapper of the procedure for use of the `wp_nav_menu`

## Usage

``` PHP
$WPsB_WP_Nav_Menu = new WPsB_WP_Nav_Menu( [
	'register_nav_menus' => [
		'primary' => 'descriptions'
	]
	] );
$WPsB_WP_Nav_Menu->register();
```

`register_nav_menus'`, See [wp_nav_menu() | Function | WordPress Developer Resources](https://developer.wordpress.org/reference/functions/wp_nav_menu/)

## Feature

* Unit Test

## License

GPLv2 or later
