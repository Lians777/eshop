<?php 

include_once'database.php';


class Produktai{

	public static function get_all() {

		$db = new Database();

		return $db->select_array("SELECT * FROM prekes");
	}

	public static function get($id) {

		$db = new Database();

		return $db->select("SELECT * FROM prekes WHERE id =  ". $id );
	}

	public static function search($quere) {
		$db = new Database();

		$result_by_name = $db->select_array("SELECT * FROM prekes WHERE name LIKE '%" . $quere ."%' ");
		return $result_by_name;

	}





}


