<?php  
// CONTROLLERS
  include_once "controllers/TemplateController.php";
  include_once "controllers/RouterController.php";
  //include_once "controllers/IngresoController.php";
// MODELS
  include_once "models/Connection.php";
  include_once "models/RouterModel.php";
  //include_once "models/IngresoModel.php";
  
  $template = new TemplateController();
  $template->includeTemplateController();
?>