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
	'INVITE' => 'Инвайт',
	'INVITE_EXPLAIN' => 'Если у вас есть инвайт, укажите его здесь',
	'INVITE_ONLY_EXPLAIN' => 'Регистрация на форуме возможна только по инвайтам',

	'INVALID_INVITE' => 'Не указан инвайт или инвайт недействителен.',


));
