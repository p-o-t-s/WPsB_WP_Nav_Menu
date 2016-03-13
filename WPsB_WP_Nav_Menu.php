<?php

/**
 * Class WPsB_WP_Nav_Menu
 *
 * Function Reference/register nav menu « WordPress Codex https://codex.wordpress.org/Function_Reference/register_nav_menu
 */
class WPsB_WP_Nav_Menu
{
	public $config;

	/**
	 * @param array $config
	 */
	public function __construct(array $config)
	{
		$defaults = array();
		$this->config = array_merge($defaults, $config);

		$this->register();
	}

	public function register()
	{
		add_action('after_setup_theme', array($this, 'after_setup_theme'), 10);
	}

	public function after_setup_theme()
	{
		$this->add_theme_support();
		$this->register_nav_menus($this->config['register_nav_menus']);
	}

	public function add_theme_support()
	{
		add_theme_support('menus');
	}

	/**
	 * @param array $menus
	 *
	 * @return void
	 */
	public function register_nav_menus(array $menus)
	{
		if (function_exists('register_nav_menus') && !empty($menus)) {
			register_nav_menus($menus);
		}
	}
}
