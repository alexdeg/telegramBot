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
 * @var int $totalCount
 * @var PhotoSize[][] $photos
 */

class UserProfilePhotos extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $totalCount;
	public $photos;

	public function types($key, $array)
	{
		switch ($key) {
			case 'photos' :
				return self::getAllPhoto($array);
		}
		return null;
	}

	private static function getAllPhoto($array)
	{
		$photos = [];
		foreach ($array as $key1 => $one1) {
			foreach ($one1 as $key2 => $one2) {
				$photos[$key1][$key2] = new PhotoSize($one2);
			}
		}
		return $photos;
	}
}