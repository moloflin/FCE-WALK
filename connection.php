<?php
	require_once 'config.php';

	class db_connection {
		private $connect;
		function _construct() {
			try {
				$this->connect = mysqli_connect(hostname, username, password, db_name);
			} catch(Exception e) {
				die("Couldn't Connect!");
			}
		}

		public function get_connection() {
			return $this->connect;
		}
	}

?>
