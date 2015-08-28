<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 01.07.2015
 * Time: 14:54
 */

namespace sijeko\telegram;

/**
 * Class User
 * @package sijeko
 * @var int $id
 * @var string $firstName
 * @var string $lastName
 * @var string $username
 */

class User extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $id;
	public $firstName;
	public $lastName;
	public $username;

}