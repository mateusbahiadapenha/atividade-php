<?php  
	class Url{
		public $url;
		function TrocarUrl($url){
			$url = base64_decode($url);
			if (empty($url)) {
				$this->url = "home";
			}else{
				$this->url = $url;	
			}
		include_once("paginas/".$this->url.".php");
		}

	}




?>	
