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

	'BB3INVITES'				=> 'BB3Invites',
	'BB3INVITES_EXPLAIN'				=> '',

	'BB3INVITES_ENABLED'				=> 'Регистрация только по инвайтам',
	'BB3INVITES_ENABLED_BUT'				=> 'Да, но инвайт не обязателен',
	'BB3INVITES_ENABLED_EXPLAIN'		=> '',

	'BB3INVITES_USER_ACTIVATE'				=> 'Активация инвайтов пользователями',
	'BB3INVITES_USER_ACTIVATE_EXPLAIN'		=> 'Разрешить активацию инвайтов пользователями, иначе будет возможность только выдачи уже активированных инвайтов',

	'BB3INVITES_AUTO_PERPOSTS'				=> 'Инвайты за сообщения',
	'BB3INVITES_AUTO_PERPOSTS_EXPLAIN'		=> 'Выдавать данное количество инвайтов за указанное количество сообщений, т.е. за каждое указанное количество сообщений будет выдаваться указанное количество инвайтов (начисление инвайтов происходит один раз в день)',
	'BB3INVITES_AUTO_PERDAYS'				=> 'Инвайты за время на форуме',
	'BB3INVITES_AUTO_PERDAYS_EXPLAIN'		=> 'Выдавать данное количество инвайтов за указанное время нахождения на форуме начиная с даты регистрации (в днях)',
	'BB3INVITES_AUTO_PERTORRENTS'				=> 'Инвайты за торренты',
	'BB3INVITES_AUTO_PERTORRENTS_EXPLAIN'		=> 'Выдавать данное количество инвайтов за указанное количество торрентов (эта опция и опция ниже работает только если установлено расширение <strong>xbtBB3cker</strong>)',
	'BB3INVITES_AUTO_PERUPLOAD'				=> 'Инвайты за аплоад',
	'BB3INVITES_AUTO_PERUPLOAD_EXPLAIN'		=> 'Выдавать данное количество инвайтов за указанное значение аплоада (в гигабайтах)',

	'BB3INVITES_FOR' => 'за',
	'BB3INVITES_INVITES' => 'инвайтов',
	'BB3INVITES_POSTS' => 'сообщений',
	'BB3INVITES_DAYS' => 'дней с регистрации',
	'BB3INVITES_TORRENTS' => 'торрентов',
	'BB3INVITES_UPLOAD' => 'ГБ аплоада',

	'BB3INVITES_DELINVITES'				=> 'Удалить инвайты',
	'BB3INVITES_DELINVITES_EXPLAIN'		=> '',
	'BB3INVITES_LOG_INVITES'				=> 'Логировать инвайты',
	'BB3INVITES_LOG_INVITES_EXPLAIN'		=> 'Логировать выдачу инвайтов пользователям',
	'BB3INVITES_RESET_COUNTERS'				=> 'Сбросить счётчики',
	'BB3INVITES_RESET_COUNTERS_EXPLAIN'		=> 'Сбросить счётчики начисления инвайтов, при этом так же можно удалить все активированные и не активированные инвайты, иначе они будут выданы повторно',

	'BB3INVITES_DELACTIVE'				=> 'Активированные',
	'BB3INVITES_DELVALID'				=> 'Не активированные',
	'BB3INVITES_DELALL'				=> 'Все',

	'BB3INVITES_NEW_VERSION' => 'Доступна новая версия расширения',

	'ACP_BB3INVITES_GIVE' => 'Выдать инвайты',
	'BB3INVITES_SELECT_GROUPS' => 'Пользователям из групп',
	'BB3INVITES_SELECT_GROUPS_EXPLAIN' => 'Выдать инвайты пользователям из выбранных групп (группа должна быть группой по умолчанию у пользователя)',
	'BB3INVITES_INVITES_COUNT' => 'Количество инвайтов',
	'BB3INVITES_INVITES_COUNT_EXPLAIN' => 'Выдать указанное количество инвайтов',

	'BB3INVITES_SELECT_USERS' => 'Указанным пользователям',
	'BB3INVITES_SELECT_USERS_EXPLAIN' => 'Выдать инвайты указанным пользователям (имена пользователей с новой строки)',
	'SELECT_USERS' => 'выбрать пользователей',

));
