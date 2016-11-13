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

	'BB3INVITES_REGLOG'				=> 'Лог регистраций по инвайтам',
	'BB3INVITES_REGLOG_EXPLAIN'				=> '',

	'USER_DELETED' => 'Пользователь удалён',
	'INVITE_OWNER' => 'Выдал инвайт',
	'INVITE_OWNER_ALL' => 'Отобразить всех зарегистрированных по инвайтам этого пользователя',
	'INVITE_TAKER' => 'Зарегистрировался',
	'INVITE_DTACTIVE' => 'Дата и время',
	'INVITE_DELETE' => 'Удалить',
	'NO_DATA' => 'Нет данных',
	'TOTAL_REGLOG' => 'Всего записей: %d',

));
