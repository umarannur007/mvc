<?php


/**
* 
*/
class router
{

	private $url = null;
	public function __construct()
	{
		
		if (isset($_GET['url'])) {
			if (file_exists(CONTROLLERS.'/'.$_GET['url'].'.php')) {
				$this->url=$_GET['url'];
				$this->_given();
			}
			else{
				die('<br><h3><center>ERROR 404, PAGE NOT FOUND<br> <small><a href="".BASEURL."">Homepage</a></small></center><h3>');
			}
		}
		else{
			$this->_default();
			}
		}

	public function _default()
	{
		require_once CONTROLLERS. '/home.php';
		$home = new home(); 
	}

	public function _given(){
		require_once CONTROLLERS. '/'.$this->url.'.php';
		if (class_exists($this->url)){
		$url = new $this->url();
	}else{
		die('please set a class for this controller');
	}
}
}

