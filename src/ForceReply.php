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
 * @var bool $forceReply
 * @var bool $selective
 */

class ForceReply extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $forceReply;
	public $selective;
}