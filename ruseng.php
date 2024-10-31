<?php

/*
Plugin Name: RusEng
Plugin URI: http://wordpress.org/plugins/ruseng/
Description: The plugin makes transliteration of Russian links into English.
Author: Buzzen
Author URI: http://profiles.wordpress.org/buzzen/
Version: 1.0
*/

$letters = array(

'А' => 'a',  'Б' => 'b',  'В' => 'v',
'Г' => 'g',  'Д' => 'd',  'Е' => 'e',
'Ё' => 'e',  'Ж' => 'zh', 'З' => 'z',
'И' => 'i',  'Й' => 'j',  'К' => 'k',
'Л' => 'l',  'М' => 'm',  'Н' => 'n',
'О' => 'o',  'П' => 'p',  'Р' => 'r',
'С' => 's',  'Т' => 't',  'У' => 'u',
'Ф' => 'f',  'Х' => 'h',  'Ц' => 'ts',
'Ч' => 'ch', 'Ш' => 'sh', 'Щ' => 'sch',
'Ъ' => '',   'Ы' => 'y',  'Ь' => '',
'Э' => 'e',  'Ю' => 'ju', 'Я' => 'ja',

'а' => 'a',  'б' => 'b',  'в' => 'v',
'г' => 'g',  'д' => 'd',  'е' => 'e',
'ё' => 'e',  'ж' => 'zh', 'з' => 'z',
'и' => 'i',  'й' => 'j',  'к' => 'k',
'л' => 'l',  'м' => 'm',  'н' => 'n',
'о' => 'o',  'п' => 'p',  'р' => 'r',
'с' => 's',  'т' => 't',  'у' => 'u',
'ф' => 'f',  'х' => 'h',  'ц' => 'ts',
'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
'ъ' => '',   'ы' => 'y',  'ь' => '',
'э' => 'e',  'ю' => 'ju', 'я' => 'ja'

);

function ruseng($title){
	global $letters;
	$title = urldecode($title);
	$title = preg_replace('/\.+/', '.', $title);
	$ruseng = strtr($title, $letters);
	return $ruseng;
}

add_filter('sanitize_title', 'ruseng', 0);

?>