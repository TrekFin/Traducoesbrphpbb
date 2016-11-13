<?php
/**
*
* New Topic [English]
*
* @package info_acp_newtopic.php
* @copyright BB3.MOBi (c) 2015 Anvar http://apwa.ru
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* DO NOT CHANGE
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
	'ACP_NEWTOPIC'					=> 'Criar tópico rapidamente ',
	'ACP_NEWTOPIC_FORUM'			=> 'Seleção de fórum',
	'ACP_NEWTOPIC_FORUM_EXPLAIN'	=> 'Selecione o fórum que será exibido na lista suspensa quando você criar um novo tópico..<br />Selecione vários fóruns segurando <samp>CTRL</samp> e clicando.',
	'ACP_NEWTOPIC_BUTTON'			=> 'Nome do botão, substituição de "Novo tópico"',
));
