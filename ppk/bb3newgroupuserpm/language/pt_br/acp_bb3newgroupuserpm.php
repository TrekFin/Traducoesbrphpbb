<?php

/**
*
* @package BB3NewGroupUserPM
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
	'GROUPUSERPM_SETTINGS' => 'Личное сообщение при вступлении',
	'BB3NEWGROUPUSERPM_USERID' => 'ID пользователя',
	'BB3NEWGROUPUSERPM_USERID_EXPLAIN' => 'ID пользователя от имени которого будут отправляться личные сообщения (0 - от имени того, кто включает в группу, данная опция будет общей для всех групп)',
	'BB3NEWGROUPUSERPM_SUBJECT' => 'Заголовок сообщения',
	'BB3NEWGROUPUSERPM_SUBJECT_EXPLAIN' => 'Может быть в виде текста или имени переменной (не используйте HTML код), переменная должна быть определена в файле /ext/ppk/bb3newgroupuserpm/language/ЯЗЫК/acp_bb3newgroupuserpm.php',
	'BB3NEWGROUPUSERPM_MESSAGE' => 'Текст сообщения',
	'BB3NEWGROUPUSERPM_MESSAGE_EXPLAIN' => 'Оправлять пользователям личное сообщение при вступлении в эту группу, может быть в виде текста или имени переменной, переменная должна быть определена в файле /ext/ppk/bb3newgroupuserpm/language/ЯЗЫК/acp_bb3newgroupuserpm.php, можно использовать HTML код, а так-же следующие переменные:<br />{USER_ID} - ID пользователя<br />{USERNAME} - имя пользователя<br />{GROUP_ID} - ID группы<br />{GROUP_NAME} - название группы<br />для отправки сообщения должно быть заполнено это поле и поле ниже',

	'GROUP_MESSAGE0_SUBJECT' => 'Пример заголовка сообщения',
	'GROUP_MESSAGE0_MESSAGE' => 'Пример текста',
));
