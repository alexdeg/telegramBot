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
 * @var float $longitude
 * @var float $latitude
 */

class Location extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $longitude;
	public $latitude;
}