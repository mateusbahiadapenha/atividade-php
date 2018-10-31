<?php
	abstract class ConnMysql{
		private $host,$user,$senha,$banco,$conn,$query;

		public function __construct(){
						$this->host = "localhost";
						$this->user = "root";
						$this->senha = "";
						$this->banco = "agenda";	
					self::start();					
					}
	protected function start(){
	$this->conn = mysqli_connect("$this->host","$this->user","$this->senha","$this->banco");

		//$this->conn = new PDO("mysql:host=$this->host;dbname=$this->banco","$this->user","$this->senha");
			}
	protected function exeQuery($qry){
		$this->query = mysqli_query($this->conn,$qry);
		return $this->query; 			
		//$this->conn->query($qry);
		//return $this->conn;	
			}			

		}

 ?>