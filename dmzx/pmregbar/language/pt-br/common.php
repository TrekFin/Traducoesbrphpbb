<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'PMREGBAR_CONFIG_SAVED'			=> 'PM Notify & Guest Register bar settings saved',
	'PMREGBAR_VERSION'				=> 'Version',
	'PMREGBAR_ENABLEPM'				=> 'Enable private message bar',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Enable or disable private message bar',
	'PMREGBAR_ENABLEREG'			=> 'Enable register bar',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Enable or disable register bar',
	'PMREGBAR_ENABLE_TEXT'			=> 'Enable alternative text for guest register bar',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'	=> 'If Yes fill in text field below for alternative guest register bar',
	'PMREGBAR_TEXT_FIELD'			=> 'Alternative text field for guest register bar',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Fill in the alternative text',
	'PMREGBAR_MESSAGE'				=> 'Ola %s você tem uma mensagem privada',
	'PMREGBAR_WELCOME'				=> 'Welcome to %s click here to register',
));
