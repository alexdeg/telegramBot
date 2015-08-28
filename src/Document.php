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
 * @var PhotoSize $thumb
 * @var string $fileName
 * @var string $mimeType
 * @var int $fileSize
 */

class Document extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $fileId;
	public $thumb;
	public $fileName;
	public $mimeType;
	public $fileSize;

	public function types($key, $array)
	{
		switch ($key) {
			case 'thumb' :
				return new PhotoSize($array);
		}
		return null;
	}
}