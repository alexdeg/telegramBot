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
 * @var int $messageId
 * @var User $from
 * @var int $date
 * @var User|GroupChat $chat
 * @var User $forwardFrom
 * @var int $forwardDate
 * @var Message $replyToMessage
 * @var string $text
 * @var Audio $audio
 * @var Document $document
 * @var PhotoSize[] $photo
 * @var Sticker $sticker
 * @var Video $video
 * @var Contact $contact
 * @var Location $location
 * @var User $newChatParticipant
 * @var User $leftChatParticipant
 * @var string $newChatTitle
 * @var PhotoSize[] $newChatPhoto
 * @var bool $deleteChatPhoto
 * @var bool $groupChatCreated
 */

class Message extends BaseType
{
	function __construct($array = null)
	{
		parent::__construct($array);
	}

	public $messageId;
	public $from;
	public $date;
	public $chat;
	public $forwardFrom;
	public $forwardDate;
	public $replyToMessage;
	public $text;
	public $audio;
	public $document;
	public $photo;
	public $sticker;
	public $video;
	public $contact;
	public $location;
	public $newChatParticipant;
	public $leftChatParticipant;
	public $newChatTitle;
	public $newChatPhoto;
	public $deleteChatPhoto;
	public $groupChatCreated;

	public function types($key, $array)
	{
		switch ($key) {
			case 'from' :
				return new User($array);
			case 'chat' :
				return self::userOrChat($array);
			case 'forwardFrom' :
				return new User($array);
			case 'replyToMessage' :
				return new Message($array);
			case 'audio' :
				return new Audio($array);
			case 'document' :
				return new Document($array);
			case 'photo' :
				return self::getAllPhoto($array);
			case 'sticker' :
				return new Sticker($array);
			case 'video' :
				return new Video($array);
			case 'contact' :
				return new Contact($array);
			case 'location' :
				return new Location($array);
			case 'newChatParticipant' :
				return new User($array);
			case 'leftChatParticipant' :
				return new User($array);
			case 'newChatPhoto' :
				return self::getAllPhoto($array);
		}
		return null;
	}

	/**
	 * @param $array
	 * @return GroupChat|User
	 * Определяет, передан пользователь, или
	 */
	private static function userOrChat($array)
	{
		if ($array['title'] !== null) {
			return new GroupChat($array);
		}
		return new User($array);
	}

	private static function getAllPhoto($array)
	{
		$photos = [];
		foreach ($array as $key => $one) {
			$photos[$key] = new PhotoSize($one);
		}
		return $photos;
	}
}