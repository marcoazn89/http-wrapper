<?php
namespace HTTP\response;

require_once('HttpHeader.php');

use HTTP\response\HTTPHeader;
class Language implements HTTPHeader {

	const ARABIC = 'ar';
	const ARMENIAN = 'hy';
	const BENGALI = 'bn';
	const CHINESE = 'zh';
	const DANISH = 'da';
	const DUTCH = 'nl';
	const ENGLISH = 'en';
	const ENGLISH_US = 'en-US';
	const FRENCH = 'fr';
	const GERMAN = 'de';
	const HINDI = 'hi';
	const INDONESIAN = 'in';
	const JAPANESE = 'ja';
	const ITALIAN = 'it';
	const KOREAN = 'kr';
	const SPANISH = 'es';
	const PORTUGUESE = 'pt';
	const ROMANIAN = 'ro';
	const RUSSIAN = 'ru';
	const TAGALOG = 'tl';
	const TURKISH = 'tr';
	const VIETNAMESE = 'vi';

	public $language;
	
	public function __construct($language, $send = false) {
		$this->language = $language;
		
		if($send) {
			$this->sendHeader();
		}
	}

	public function sendHeader() {
		return header("Content-Language: {$this->language}");
	}
}