<?php
/**
* 
*/
class home
{
	public $title ='Umar Annur';

	public $message ='Please Insert your record as specified';
	
	 public function __construct()
	{
		$this->loadview();
	}
	public function loadview(){
		if (isset($_POST['formID'])) {
            require_once MODELS.'/home_model.php';
            $model = new home_model();
		} 
		else{
            require_once VIEWS.'/asset/header.php';
            require_once VIEWS.'/home_view.php';
            require_once VIEWS.'/asset/footer.php';
		}

	}

}