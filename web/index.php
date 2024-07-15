<?php

/*======================================== 
Depurar erroes
==========================================*/
ini_set("display errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "C:/xampp/htdocs/ecommerce/web/php_error_log");
/*======================================== 
Depurar erroes
==========================================*/

require_once "controllers/controller.template.php";

$index = new TemplateController();

$index->index();