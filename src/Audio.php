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
 * @var int $duration
 * @var string $mimeType
 * @var int $fileSize
 */

class Audio extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $fileId;
	public $duration;
	public $mimeType;
	public $fileSize;

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