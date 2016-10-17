<?php
/**
*
* Birthday Control extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 Lucifer <http://www.anavaro.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'BIRTH_DATE'	=> 'Data de nascimento',
	'BDAY_NO_DATE'	=> 'Por favor selecione a data de nascimento. Nao sera possivel registrar-se neste forum se voce nao inserir sua data de nascimento.',
	'BDAY_TO_YOUNG'	=> 'Voce nao tem a idade minima para registrar-se neste forum. <br /> Este forum exige a idade minima de %1$d anos.',
	'BC_SHOW_BDAY'	=> 'Mostrar idade',
	'BDAY_NA'	=> 'nao aplicavel',

));
