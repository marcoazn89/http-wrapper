<?php
namespace HTTP\Support;

abstract class ContentSupport {
	protected static $content = array();

	public static function addSupport(Array $content) {
		static::$content = $content;
	}

	public static function getSupport() {
		if(count(static::$content) == 0) {
			return static::getDefault();
		}
		else {
			return static::$content;
		}
	}
}
