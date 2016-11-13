<?php

/**
*
*
* @package - Application Form language
* @copyright 2016 Rich McGirr (RMcGirr83)
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
	//Module and page titles
	'ACP_APPFORM_TITLE'					=> 'Formulario de candidatura',
	'ACP_APP_FORM'						=> 'Configuracoes',
	'ACP_APPLICATIONFORM_SETTINGS'		=> 'Configuracoes do Formulario de candidatura',
	'APPLICATIONFORM_FORUM'				=> 'Forum',
	'APPLICATIONFORM_FORUM_EXPLAIN'		=> 'Selecione o forum, para onde o formulario sera postado.',
	'APPLICATIONFORM_POSITIONS'			=> 'Formulario de Posicoes',
	'APPLICATIONFORM_POSITIONS_EXPLAIN'	=> 'Digite as posicoes para que os usuarios solicitem aplicacoes em linhas separadas.',
	'APPFORM_SETTINGS_SUCCESS'			=> 'Configuracoes do formulario de candidatura foram salvas.',
	'APPFORM_MUST_HAVE_POSITIONS'		=> 'Voce necessita ter ao menos uma posicao.',
	'APPLICATIONFORM_NRU'				=> 'Permitir grupo recem registrado',
	'APPLICATIONFORM_NRU_EXPLAIN'		=> 'Se definido sim, aqueles no grupo recem registrado terao acesso ao formulario de candidatura.',
	'APPLICATIONFORM_ALLOW_ATTACHMENT'	=> 'Permitir anexar arquivos',
	'APPLICATIONFORM_ALLOW_ATTACHMENT_EXPLAIN' => 'Se definido sim, arquivos tipo doc, pdf e textos serao autorizados a serem carregados.',
	'APPLICATIONFORM_ATTACHMENT_REQ'	=> 'Necessario o anexo',
	'APPLICATIONFORM_ATTACHMENT_REQ_EXPLAIN' => 'Se definido sim, o formulario ira requerer um anexo para posicao a qual se candidata.',
));
