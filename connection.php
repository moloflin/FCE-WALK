<?php
	require_once 'config.php';

	class db_connection {
		private $connect;
		function _construct() {
			$this->connect = mysqli_connect(hostname, username, password, db_name) or die("Couldn't Connect!");
		}

		public function get_connection() {
			return $this->connect;
		}
	}

?>
