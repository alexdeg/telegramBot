<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 01.07.2015
 * Time: 14:57
 */

namespace sijeko\telegram;


class BaseType
{
	function __construct($array = null)
	{
		if (is_array($array)) {
			$this->setFields($array);
		}
	}

	private function setFields($array)
	{
		$vars = get_class_vars(get_class($this));
		foreach ($array as $key => $one) {
			$key = self::toCamelCase($key);
			if (array_key_exists($key, $vars)) {
				if (method_exists($this, 'Types') && ($class = $this->types($key, $one)) !== null) {
					$this->$key = $class;
				} else
					$this->$key = $one;
			}
		}
	}

	protected static function toCamelCase($str)
	{
		return lcfirst(str_replace(" ", "", ucwords(str_replace("_", " ", $str))));
	}


}