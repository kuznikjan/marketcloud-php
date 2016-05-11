<?php
namespace Marketcloud;



abstract class ApiResource {
	
	public static function _POST($url,$body = '{}') {
		$url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;
		return \Httpful\Request::post($url)
			    ->sendsJson()
			    ->body($body)
			    ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			    ->send();

	}
	public static function _GET($url) {
		$url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;
		return \Httpful\Request::get($url)
			    ->expectsJson()
			    ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			    ->send();
	}
	public static function _PUT($url,$body = '{}') {
		$url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;
		return \Httpful\Request::put($url)
			    ->sendsJson()
			    ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			    ->send();

	}
	public static function _DELETE() {

	}
}

?>