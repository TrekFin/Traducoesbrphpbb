<?php

/**
*
* @package BB3Invites
* @copyright (c) 2016 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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

$lang = array_merge($lang, array(
	'ACP_BB3INVITES'				=> 'BB3Invites',

	'ACP_BB3INVITES_CONFIG'				=> 'Настройки',
	'ACP_BB3INVITES_REGLOG'				=> 'Лог регистраций по инвайтам',
	'ACP_BB3INVITES_INVITELOG'				=> 'Лог выдачи инвайтов',

	'LOG_CONFIG_BB3INVITES_CONFIG'	=> '<strong>Изменены настройки BB3Invites</strong>',
	'LOG_CONFIG_BB3INVITES_REGLOG'	=> '<strong>Удалены данные лога регистраций по инвайтам</strong>',
	'LOG_CONFIG_BB3INVITES_INVITELOG'	=> '<strong>Удалены данные лога выдачи инвайтов</strong>',

	'ACL_U_CANGIVEINVITE'		=> '<strong>BB3Invites</strong> Может выдавать инвайты',
));
