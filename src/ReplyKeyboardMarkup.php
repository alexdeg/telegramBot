<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 01.07.2015
 * Time: 14:54
 */

namespace sijeko\telegramParser;

/**
 * Class GroupChat
 * @package sijeko
 * @var string[][] $keyboard
 * @var bool $resizeKeyboard
 * @var bool $oneTimeKeyboard
 * @var bool $selective
 */

class ReplyKeyboardMarkup extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $keyboard;
	public $resizeKeyboard;
	public $oneTimeKeyboard;
	public $selective;
}