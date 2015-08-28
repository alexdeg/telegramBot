<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 01.07.2015
 * Time: 14:54
 */

namespace sijeko\telegramParser;

/**
 * Class ReplyKeyboardHide
 * @package sijeko
 * @var bool $hideKeyboard
 * @var bool $selective
 */

class ReplyKeyboardHide extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $hideKeyboard;
	public $selective;
}