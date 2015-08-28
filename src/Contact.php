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
 * @var string $phoneNumber
 * @var string $firstName
 * @var string $lastName
 * @var string $userId
 */

class Contact extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $phoneNumber;
	public $firstName;
	public $lastName;
	public $userId;
}