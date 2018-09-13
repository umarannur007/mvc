<?php

/**
* 
*/
class users
{

	public $title = "Users";

	public $message = "All Users";
	
	public function __construct()
	{
            $this->loadview();
	}

	public function loadview(){
        require_once MODELS . '/users_model.php';
        $users = new users_model();


        if(isset($_GET['delete'])){
            $delete = strip_tags($_GET['delete']);
            $users->deleteUser($delete);
        }

        elseif(isset($_GET['edit'])){
            $edituser = $users->_Users();
            require_once VIEWS . '/edit.php';
        }

        else {
            $allUsers = $users->_Users();
            require_once VIEWS . '/users_view.php';
        }
	}

	public function dobMe(){
		$array = explode("-", $_POST['dob']);
        $month = $array[1];
        $year = $array[0];
        $day = $array[2];

        $birthdau = mktime(0,0,0,$month,$day,$year);
        $difference = time() - $birthdau;
        $age = floor($difference / 31556926);

	}

}