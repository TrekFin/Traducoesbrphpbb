<?php
/**
 *
 * @package Quick Title Edition Extension
 * @copyright (c) 2015 ABDev
 * @copyright (c) 2015 PastisD
 * @copyright (c) 2015 Geolim4 <http://geolim4.com>
 * @copyright (c) 2015 Zoddo <zoddo.ino@gmail.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

// ignore
if (!defined('IN_PHPBB'))
{
	exit;
}

// init lang ary, if it doesn't !
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// select
	'QTE_ATTRIBUTES' => 'Atributos do tópico',
	'QTE_ATTRIBUTE' => 'Atributo do tópico',

	'QTE_ATTRIBUTE_ADD' => 'Selecione um atributo de tópico',
	'QTE_ATTRIBUTE_REMOVE' => 'Remover o atributo do tópico',
	'QTE_ATTRIBUTE_DESIRED' => 'Selecionar o atributo desejado',
	'QTE_ATTRIBUTE_KEEP' => 'Manter o atributo atual',
	'QTE_ATTRIBUTE_RESTRICT' => 'Exclusão de atributo proibido',

	// notifications
	'QTE_ATTRIBUTE_ADDED' => 'An attribute has been applied to the topic title',
	'QTE_ATTRIBUTE_UPDATED' => 'The attribute of that topic has been updated',
	'QTE_ATTRIBUTE_REMOVED' => 'The topic attribute has been removed',

	'QTE_TOPIC_ATTRIBUTE_ADDED' => 'An attribute has been applied to the selected topic',
	'QTE_TOPICS_ATTRIBUTE_ADDED' => 'An attribute has been applied to the selected topics',
	'QTE_TOPIC_ATTRIBUTE_UPDATED' => 'The attribute of the selected topic has been updated',
	'QTE_TOPICS_ATTRIBUTE_UPDATED' => 'The attribute of the selected topics has been updated',
	'QTE_TOPIC_ATTRIBUTE_REMOVED' => 'The attribute of the selected topic has been removed',
	'QTE_TOPICS_ATTRIBUTE_REMOVED' => 'The attribute of the selected topics has been removed',

	// search
	'QTE_ATTRIBUTE_SELECT' => 'Select a topic attribute',
	'QTE_ATTRIBUTE_SEARCH' => 'Search for attributes',
	'QTE_ATTRIBUTE_SEARCH_EXPLAIN' => 'Select the attribute you wish to search',

	// sort
	'QTE_SORT' => 'As attribute',
	'QTE_ALL' => 'All',

	// mistake messages
	'QTE_ATTRIBUTE_UNSELECTED' => 'You must select an attribute!',

	// placeholders
	'QTE_KEY_USERNAME' => '¦user¦',
	'QTE_KEY_DATE' => '¦date¦',
));

// topic attributes as keys
$lang = array_merge($lang, array(
	'QTE_SOLVED' => '[Solved by %mod% :: %date%]',
	'QTE_CANCELLED' => 'Cancelled',
));
