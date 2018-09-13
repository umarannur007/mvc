<?php 

session_start();

include_once 'config/config.php';
include_once 'config/db.php';
include_once 'config/rounter.php';

if(!is_dir(VIEWS)){
	die('PLEASE SET VIEWS FOLDER CORRECTLY');
}

if(!is_dir(CONTROLLERS)){
	die('PLEASE SET CONTROLLERS FOLDER CORRECTLY');
}

if(!is_dir(MODELS)){
	die('PLEASE SET MODELS FOLDERS CORRECTLY');
}

//Start application by calling rounter class

$rout = new rounter();