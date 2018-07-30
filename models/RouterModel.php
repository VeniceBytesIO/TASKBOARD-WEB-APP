<?php  
class RouterModel
{
	public function loadRoutesModel($enlace){
		if ($enlace == "dashboard" ||
			$enlace == "employees" ||
			$enlace == "insurance" ||
			$enlace == "addInsurance") {
			$url = 'views/modules/'.$enlace.'.php';
		}else if($enlace == "index"){
			$url = 'views/modules/login.php';
		}else{
			$url = 'views/modules/login.php';
		}
		return $url;
	}
}
?>