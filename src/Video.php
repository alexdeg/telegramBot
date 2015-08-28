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
 * @var int $duration
 * @var PhotoSize $thumb
 * @var string $mimeType
 * @var int $fileSize
 * @var string $caption
 */

class Video extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $fileId;
	public $width;
	public $height;
	public $duration;
	public $thumb;
	public $mimeType;
	public $fileSize;
	public $caption;

	public function types($key, $array)
	{
		switch ($key) {
			case 'thumb' :
				return new PhotoSize($array);
		}
		return null;
	}

	public function getDuration()
	{
		if ($this->duration > 3600){
			$h = (int)($this->duration / 3600);
			$this->duration %= 3600;
			$m = (int)($this->duration / 60);
			$this->duration %= 60;
			$s = $this->duration;
			return "$h:$m:$s";
		} elseif ($this->duration > 60){
			$m = (int)($this->duration / 60);
			$this->duration %= 60;
			$s = $this->duration;
			return "$m:$s";
		}
		return $this->duration;
	}
}