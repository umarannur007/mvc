<?php

class users_model extends db {

    public $users = null;

    public function __construct(){
        parent::__construct();
    }

    public function _Users(){
        $users = $this->_selectAll('mvc_user', '*');
        return $users;
    }
    public function _User(){
        $users = $this->_select('mvc_user', '*','edit', '');
        return $users;
    }

    public function deleteUser($id){
       $this->delete('mvc_user', $id);
       header("Location:".BASEURL."?url=users");
    }

}