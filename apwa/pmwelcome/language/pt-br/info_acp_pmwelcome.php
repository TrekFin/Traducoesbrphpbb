<?php

/**
*
* @package PM Welcome [English]
* @copyright BB3.MOBi (c) 2015 Anvar http://apwa.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_PMWELCOME'					=> 'Mensagem de Boas-Vindas',
	'ACP_PMWELCOME_EXPLAIN'			=> 'Você pode definir o texto da Mensagem Privada que será enviada ao usuário em seu primeiro acesso.',
	'ACP_PMWELCOME_SETTINGS'		=> 'Configuração da mensagem de Boas-Vindas.',
	'ACP_PMWELCOME_USER'			=> 'Remetente',
	'ACP_PMWELCOME_USER_EXPLAIN'	=> 'Coloque a identificação do usuário remetente da Mensagem Privada.',
	'ACP_PMWELCOME_SUBJECT'			=> 'Assunto da mensagem',
	'ACP_PMWELCOME_TEXT'			=> 'Texto da mensagem',
	'ACP_PMWELCOME_TEXT_EXPLAIN'	=> 'Você pode usar bbcodes, smiles e a chave {USERNAME} para o nome do usuário que receberá a mensagem.',
));
