<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2016 Tatiana5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'QR_ENABLE_AJAX_PAGINATION' => 'Não atualizar formulário de resposta rápida ao navegar o tópico',
	'QR_ENABLE_SCROLL'          => 'Ativar auto rolagem ao navegar o tópico',
	'QR_ENABLE_SOFT_SCROLL'     => 'Ativar rolagem suave e animações quando se navega o tema e depois de resposta rápida',
));
