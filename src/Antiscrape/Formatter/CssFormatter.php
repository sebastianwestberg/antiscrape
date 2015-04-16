<?php

namespace Antiscrape\Formatter;

class CssFormatter implements FormatterInterface
{
	private static $css = array();

	public function addFormatting($data = array())
	{
		CssFormatter::$css[] = sprintf(".%s{%s}", $data['selector'], $data['style']);
	}

	public static function getFormatting()
	{
		$str = '';

		foreach (CssFormatter::$css as $css) {
			$str .= $css;
		}

		return $str;
	}

	public function nameGenerator($classLen = 8, $chars = 'abcdefghijklmnopqrstuvwxyz')
	{
		$charsLen = strlen($chars) - 1;
		$class = '';

		for ($i = 0; $i < $classLen; $i++) {
			$randEntry = mt_rand(1, $charsLen);
			$class .= $randEntry % 2 === 0 ? $chars[$randEntry] : ucfirst($chars[$randEntry]);
		}

		return $class;
	}
}
