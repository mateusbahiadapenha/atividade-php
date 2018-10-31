            
 
 <?php
 if(empty($_SESSION["nome"])){
 		$logar_sair = "logar";	
 }else{
 	$logar_sair = "sair";
 }
   echo "<a id='logar' class='btn btn-primary' href='?pgn=".base64_encode($logar_sair)."'>$logar_sair
  </a>";
  ?>