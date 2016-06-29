<?php


Class App
{
	protected $controller = 'home';
	
	protected $method = 'index';
	
	protected $params = array();
	
	public function __construct()
	{
		global $config;
		$url = $this->parseUrl();
		if(in_array($config->admin_prefix(),$url))
		{
			$this->controller = 'dashboard';
			self::backend_route($url);	
		}else
		{
			self::frontend_route($url);
		}
		
	}

	public function parseUrl()
	{
		if(isset($_GET['url']))
		{
			return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
		}
	}
	public function backend_route($url)
	{
		require_once 'backendcontroller.php';
		// Check requested controller exists or not
		if(isset($url[1]))
		{
		if(file_exists(__DIR__.'/../controllers/backend/'.$url[1].'.php'))
		{
			// override controller name by requested controller
			$this->controller = $url[1];
			unset($url[1]);
		}
		}
		// include controller file
		require_once __DIR__.'/../controllers/backend/'.$this->controller.'.php';
		// override controller object by actual controller
		$this->controller = new $this->controller;
		if(isset($url[2]))
		{
			if(method_exists($this->controller, $url[2]))
			{
				$this->method = $url[2];
				unset($url[2]);
			}
		}

		$this->params = $url ? array_values($url) : array();

		call_user_func_array([$this->controller,$this->method], $this->params);
	}
	public function frontend_route($url)
	{
		// Check requested controller exists or not
		if(file_exists(__DIR__.'/../controllers/frontend/'.$url[0].'.php'))
		{
			// override controller name by requested controller
			$this->controller = $url[0];
			unset($url[0]);
		}
		// include controller file

		require_once __DIR__.'/../controllers/frontend/'.$this->controller.'.php';
		// override controller object by actual controller
		$this->controller = new $this->controller;
		if(isset($url[1]))
		{
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : array();

		call_user_func_array([$this->controller,$this->method], $this->params);
	}
}