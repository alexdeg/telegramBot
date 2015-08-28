<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 01.07.2015
 * Time: 14:54
 */

namespace sijeko\telegram;

/**
 * Class GroupChat
 * @package sijeko
 * @var string $fileId
 * @var int $width
 * @var int $height
 * @var PhotoSize $thumb
 * @var int $fileSize
 */

class Sticker extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $fileId;
	public $width;
	public $height;
	public $thumb;
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