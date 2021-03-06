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
	'QR_BBPOST'                        => 'Source of the post',
	'QR_INSERT_TEXT'                   => 'Insira citações no formulário Resposta Rápida',
	'QR_PROFILE'                       => 'Ir para o perfil',
	'QR_QUICKNICK'                     => 'Referir por nome de usuário',
	'QR_QUICKNICK_TITLE'               => 'Insira nome de usuário no formulário Resposta Rápida',
	'QR_REPLY_IN_PM'                   => 'Responder em MP',
	//begin mod Translit
	'QR_TRANSLIT_TEXT'                 => 'Translit:',
	'QR_TRANSLIT_TEXT_TO_RU'           => 'to russian',
	'QR_TRANSLIT_TEXT_TOOLTIP'         => 'For instant view in Russian click the button',
	//end mod Translit
	//begin mod CapsLock Transform
	'QR_TRANSFORM_TEXT'                => 'Change Text Case:',
	'QR_TRANSFORM_TEXT_TOOLTIP'        => 'Press a button to change the case of the highlighted text',
	'QR_TRANSFORM_TEXT_LOWER'          => '&#9660; abc',
	'QR_TRANSFORM_TEXT_UPPER'          => '&#9650; ABC',
	'QR_TRANSFORM_TEXT_INVERS'         => '&#9660;&#9650; aBC',
	'QR_TRANSFORM_TEXT_LOWER_TOOLTIP'  => 'lower case',
	'QR_TRANSFORM_TEXT_UPPER_TOOLTIP'  => 'UPPER CASE',
	'QR_TRANSFORM_TEXT_INVERS_TOOLTIP' => 'iNVERT cASE',
	//end mod CapsLock Transform
));
