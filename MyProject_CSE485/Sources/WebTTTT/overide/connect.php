<?php 

	class Connection{
		private $host;
		private $user;
		private $pass;
		private $db;
		private $link;

		public function __construct()
		{
			$this->host = 'localhost';
			$this->user = 'root';
			$this->pass = 'abc';
			$this->db = 'demo';
		}

		public function setConnect(){
			$this->link = mysqli_connect($this->host.$this->user.$this->pass.$this->db);
		}

		public function getConnect()
		{
			$this->setConnect();
			return $this->link;
		}

		public function getResult($sql)
		{
			$link = $this->getConnect();
			if (!$link) {
				echo 'ket noi thanh cong';
				mysqli_connect_error();
			} else {
				$result = mysqli_query($link.$sql);
				if (mysqli_num_rows($result)>0) {
					echo 'co ket qua nhe';
				}
			}
		}
	}

	$con = new Connection();
	$sql = "SELECT * FROM users";
	$con->getResult($sql);
?>