<?php
/**
*
* Fancy Lazy Topics Loader
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.1.14] (https://github.com/phpBBTraducoes)
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* 
*/

if (!defined('IN_PHPBB')) {
	exit;
}
if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
	'FLTL'							=> 'Fancy Lazy Topics loader',
	'FLTL_EXPLAIN'					=> 'Role para baixo para mais tópicos',
    'FLTL_BY'					    => '&nbsp;&#45;&nbsp;Por&nbsp;',
	'FLTL_LIMIT'					=> 'Posts para exibir',
	'FLTL_LIMIT_EXPLAIN'			=> 'Defina o máximo de mensagens por linha (padrão: 4)',

	'FLTL_TIME'						=> 'Limite de Tempo do Tópico',
	'FLTL_TIME_EXPLAIN'				=> 'Define o máximo de dias que o tópico será buscado no banco de dados',

	'FLTL_TYPE'						=> 'Ordem',
	'FLTL_TYPE_EXPLAIN'				=> 'Mostrar primeiro ou última mensagem dos tópicos recentes',

	'FLTL_EXCLUDED_FORUMS'			=> 'Excluir categorias do Fancy Lazy Topics loader',
	'FLTL_EXCLUDED_FORUMS_EXPLAIN'	=> 'Segure shift ou ctrl para selecionar mais de uma opção',

	'FLTL_READ_MORE'				=> 'LER MAIS',
	'FLTL_BACK_TO_START'			=> 'VOLTAR AO INÍCIO',
	'FLTL_VIEW_MORE_TOPICS'			=> 'VER MAIS TÓPICOS'
));
