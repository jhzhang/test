<?php
class db {

	private  $link = null;
	private  $query = null;
	public function __construct() {
		$this->link = mysql_connect('localhost', 'root', '123456');
		mysql_select_db('muco', $this->link);
	}
	
	public function query ($sql) {
		return mysql_query ($sql, $this->link);
	}
	public function fetchArray ($query) {
		return mysql_fetch_array($query);
	}
	
}

$db = new db();
