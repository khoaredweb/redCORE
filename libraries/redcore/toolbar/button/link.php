<?php
/**
 * @package     Redcore
 * @subpackage  Toolbar
 *
 * @copyright   Copyright (C) 2008 - 2015 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later, see LICENSE.
 */

defined('JPATH_REDCORE') or die;

/**
 * Represents a link button.
 *
 * @package     Redcore
 * @subpackage  Toolbar
 * @since       1.0
 */
class RToolbarButtonLink extends RToolbarButton
{
	/**
	 * The button url.
	 *
	 * @var  string
	 */
	protected $url;

	/**
	 * Constructor.
	 *
	 * @param   string  $text       The button text.
	 * @param   string  $url        The button task.
	 * @param   string  $class      The button class.
	 * @param   string  $iconClass  The icon class.
	 */
	public function __construct($text = '', $url = '', $class = '', $iconClass = '')
	{
		parent::__construct($text, $iconClass, $class);

		$this->url = $url;
	}

	/**
	 * Get the button url.
	 *
	 * @return  string  The url.
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * Render the button.
	 *
	 * @param   boolean  $isOption  Is menu option?
	 *
	 * @return  string  The rendered button.
	 */
	public function render($isOption = false)
	{
		return RLayoutHelper::render(
			'toolbar.button.link',
			array(
				'button' => $this,
				'isOption' => $isOption
			)
		);
	}
}
