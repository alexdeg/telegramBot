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
 * @var string $fileId
 * @var int $width
 * @var int $height
 * @var int $fileSize
 */

class PhotoSize extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $fileId;
	public $width;
	public $height;
	public $fileSize;
}