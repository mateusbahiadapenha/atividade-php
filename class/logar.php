<?php
include_once("conexao.php");

class Logar extends ConnMysql{
	public $login,$senha;
	
	function PegarLogin($login){
		$this->login = $login;
	}
	function SenhaLogin($senha){
		$this->senha = $senha;
	}
	function SelectPessoa(){
			$this->sql = "SELECT * FROM pessoa,login WHERE id=pessoa_fk";
			$consSql = self::exeQuery($this->sql);
			$contador = 0;
			while ($resultado = mysqli_fetch_assoc($consSql)) {
			$contador++;	
				//echo $resultado['idpessoa']."<br>";
			
				if($this->login==$resultado['login'] AND $this->senha==$resultado['senha']){
					echo "seja bem vindo, <br> Seu login É ".$resultado['nome']."<br>";

				 	session_start();

				 	$_SESSION["nome"] = $resultado['nome'];
				 	$_SESSION["id"] = $resultado['id'];	

				 	
header("Location: ../?pgn=".base64_encode('home'));


				}else{
					echo "Desculpe-me vc nao tem acesso. ".$resultado['id']."<br>";
					//header("Location: ../?pgn=".base64_encode('formulario')."&msg=".base64_encode($msg));
	
				}

		}
	}				
}

$login = @$_REQUEST["email"];
$senha = @$_REQUEST["passwd"];

$LogarSys = new Logar;
$LogarSys->PegarLogin($login);
$LogarSys->SenhaLogin($senha);
$LogarSys->SelectPessoa();












?>




