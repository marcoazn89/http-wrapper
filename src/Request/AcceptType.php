<?php
namespace HTTP\Request;

class AcceptType extends RequestHeader {

	public static function getDefault() {
		return array('application/xml','text/html','application/xhtml+xml','application/json','text/plain');
	}

	public static function getHeader() {
		return static::contentPriority($_SERVER['HTTP_ACCEPT']);
	}
}
