<?php  
	class RouterController{
		public function loadRoutesController(){
			if (isset($_GET['action'])) {
				$action = $_GET['action'];
			}else{
				$action = "index";
			}
			$response = RouterModel::loadRoutesModel($action);
			include $response;
		}
	}
?>