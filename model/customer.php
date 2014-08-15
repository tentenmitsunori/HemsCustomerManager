<?php

class Customer{
	public function getAll(){
	
	}

	public function create($params){
		$p = $this->set_params($params);
		$sql = sprintf("INSERT INTO customers (last_name, first_name, last_name_kana, first_name_kana, email, phone, address) VALUES 
			('%s', '%s', '%s', '%s', '%s', '%s', '%s')", $p[0], $p[1], $p[2], $p[3], $p[4], $p[5], $p[6]);
		$result_flag = mysql_query($sql); 
		return $result_flag;
	}

	public function update(){
	
	}

	public function get($id){
	
	}

	public function destory($id){
	
	}

	private function set_params($params){
	  	$p = array();
		$p[0] = mysql_real_escape_string($params["last_name"]);
		$p[1] = mysql_real_escape_string($params["first_name"]);
		$p[2] = mysql_real_escape_string($params["last_name_kana"]);
		$p[3] = mysql_real_escape_string($params["first_name_kana"]);
		$p[4] = mysql_real_escape_string($params["email"]);
		$p[5] = mysql_real_escape_string($params["phone"]);
		$p[6] = mysql_real_escape_string($params["address"]);
	 	return $p;
	}
}

?>
