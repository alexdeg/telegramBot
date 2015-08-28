<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 01.07.2015
 * Time: 14:54
 */

namespace sijeko\telegramParser;

/**
 * Class Update
 * @package sijeko
 * @var int $updateId
 * @var Message $message
 */

class Update extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $updateId;
	public $message;

	public function types($key, $array)
	{
		switch ($key) {
			case 'message' :
				return new Message($array);
		}
		return null;
	}
}