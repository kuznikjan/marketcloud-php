<?php

namespace Marketcloud;



class Variables extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/variables",$query);
	}

	public static function getById($id) {
		return parent::_GET("/variables/".$id);
	}

	public static function create($data) {
		return parent::_POST("/variables",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/variables/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/variables/".$id);
	}
}

?>