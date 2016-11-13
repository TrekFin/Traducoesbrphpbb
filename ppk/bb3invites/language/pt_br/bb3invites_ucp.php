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

	'INVITES_DISABLED' => 'Инвайты отключены или у вас нет прав.',

	'UCP_ACTIVEINVITES' => 'Доступно инвайтов',
	'UCP_ACTIVEINVITES_EXPLAIN' => '',

	'USER_INVITES_EXPLAIN' => 'использованных инвайтов: <strong>%d</strong>, неиспользованных инвайтов: <strong>%d</strong>',
	'DELETE_VALID_INVITES' => 'удалить неиспользованные инвайты (<span style="color:#FF0000;">без возможности восстановления</span>)',
	'ACTIVATE_INVITES' => 'активировать указанное количество инвайтов',
	'ACTIVATE_DISABLED' => 'Активация инвайтов отключена',

	'SHOW_INVITES_TAKERS' => 'список зарегистрированных по вашим инвайтам пользователей',
	'SHOW_INVITES_CODES' => 'список кодов неиспользованных инвайтов',

	'INVITES' => 'Инвайты',
	'INVITES_EXPLAIN' => '',

	'USER_DELETED' => 'Пользователь не существует',

	'VALID_INVITES_DELETED' => 'Неиспользованные инвайты удалены',
	'INVITES_ACTIVATED' => 'Инвайты активированы',
));
