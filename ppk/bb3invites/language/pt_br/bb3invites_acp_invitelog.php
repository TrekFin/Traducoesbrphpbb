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

	'BB3INVITES_INVITELOG'				=> 'Лог выдачи инвайтов',
	'BB3INVITES_INVITELOG_EXPLAIN'				=> '',

	'USER_DELETED' => 'Пользователь удалён',
	'INVITE_OWNER' => 'Получил инвайт',
	'INVITE_OWNER_ALL' => 'Отобразить все инвайты выданные этому пользователю',
	'INVITE_TAKER' => 'Выдал инвайт',
	'INVITE_COUNT' => 'Инвайтов',
	'INVITE_DTACTIVE' => 'Дата и время',
	'INVITE_DELETE' => 'Удалить',
	'NO_DATA' => 'Нет данных',
	'TOTAL_INVITELOG' => 'Всего записей: %d',

	'INVITE_DESCR_USERS' => 'Пользователи: %s',
	'INVITE_DESCR_GROUPS' => 'Группы: %s',
	'INVITE_DESCR_UPLOAD' => 'Бот за %dГБ аплоада',
	'INVITE_DESCR_TORRENTS' => 'Бот за %d торрентов',
	'INVITE_DESCR_DAYS' => 'Бот за %d дней с регистрации',
	'INVITE_DESCR_POSTS' => 'Бот за %d сообщений',
));
