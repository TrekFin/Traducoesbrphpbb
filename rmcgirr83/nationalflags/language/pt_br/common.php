<?php

/**
*
*
* @package - National Flags language
* @copyright (c) 2015 RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'FLAGS'				=> array(
		1 => '%s flag',
		2 => '%s flags',
	),
	'USER_FLAG'			=> 'Bandeira',
	'USER_FLAG_EXPLAIN'	=> 'A bandeira padrao do bordo esta sendo exibida .',
	'NATIONAL_FLAGS'	=> 'Bandeiras',
	'FLAG_EXPLAIN'		=> 'Escolha sua bandeira',
	'USER_NEEDS_FLAG'	=> 'Por favor, tome um momento e %svisite seu perfil%s para escolher uma bandeira.',
	'FLAGS_VIEWONLINE'	=> 'Visualizando bandeiras',
	'FLAG_USERS'		=>  array(
		1 => '%s Usuario',
		2 => '%s Usuarios',
	),
	'MUST_CHOOSE_FLAG'	=> '<span class="error">E necessario que voce escolha uma bandeira.</span>',
	'NO_SUCH_FLAG'		=> 'Por favor, escolha uma bandeira.',
	'NO_USER_HAS_FLAG'	=> 'Nenhum usuario tem esta bandeira',
	'FLAG_NOT_EXIST'	=> 'Esta bandeira nao existe',
));
