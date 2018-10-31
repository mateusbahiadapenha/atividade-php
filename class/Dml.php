<?php
include_once("ConnMysql.php");
class Dml extends ConnMysql{
	protected  $sql,$tabela, $camposTabela, $dados,$IdcamposTabela, $Iddados,$IdcamposTabelaDados,$msg; 	
	function PegarTabela($tbl){
				$this->tabela = $tbl; 
	}
	function PegarCamposTabela($camposTabela){
				$this->camposTabela = $camposTabela; 
	}
	function PegarDados($dados){
				$this->dados = $dados; 
	}
	function PegarIdCamposTabela($IdcamposTabela){
				$this->IdcamposTabela = $IdcamposTabela; 
	}
	function PegarIdDados($Iddados){
				$this->Iddados = $Iddados; 
	}
	function IdcamposTabelaDados($IdcpsTblDds){
		$this->IdcamposTabelaDados = $IdcpsTblDds;
	}
	function RetornarMsg(){
		return $this->msg;
	}


	function Inserir(){
		$this->sql = "INSERT INTO $this->tabela 
								($this->camposTabela) 
									VALUES 
										($this->dados)";
		if (self::exeQuery($this->sql)) {
			$this->msg = "Cadastrado com Sucesso!!! ;D";
				}								
			}
			function idlogin(){
				$this->sql = INSET INTO $this->tabela ($this->camposTabela)
				 VALUES ()
			}
	
				

		}	
?>