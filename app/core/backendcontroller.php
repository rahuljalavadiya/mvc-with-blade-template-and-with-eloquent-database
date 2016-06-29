<?php

Class BackendController
{

	public function __construct()
	{
		global $auth,$config;
		if(!$auth->is_admin())
		{	
			redirect($config->admin_url().'login');
		}
	}
	protected function model($model)
	{
		require_once __DIR__.'/../models/'.$model.'.php';
		return new $model();
	}

	protected function view($view,$data= array(),$layout = true)
	{
		global $config;
		if($layout==false)
		{
			ob_start();
			$config->view($view,$data);
			return ob_get_clean();
		}
		$config->view($view,$data);
		
	}
}