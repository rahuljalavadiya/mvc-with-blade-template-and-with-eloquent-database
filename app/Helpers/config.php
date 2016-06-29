<?php
use Windwalker\Renderer\BladeRenderer;
Class Config
{
	public function site_url()
	{
		return 'http://localhost/travel/';
	}

	public function app_name()
	{
		return 'Site Title';
	}

	public function db_prefix()
	{
		return 'tvl_';
	}
	public function admin_prefix()
	{
		return 'm@n@ger';
	}

	public function admin_url($url='')
	{
		return self::site_url().self::admin_prefix().'/'.$url;
	}

	public function script($src)
	{
		echo '<script src="'.$src.'" type="script/javascript"/>';
	}

	public function style($link)
	{
		echo '<style href="'.$link.'" rel="stylesheet">';
	}

	public function asset_url($url)
	{
		return $this->site_url().'public/assets/'.$url;
	}

	public function view($path,$data)
	{
		$config = array();
		$paths = array(__DIR__ . '/../views');
		$renderer = new BladeRenderer($paths, array('cache_path' => __DIR__ . '/../cache'));

		return $renderer->render($path,$data);
	}

}
if(!isset($GLOBALS['config']))
{
	$GLOBALS['config']  = new Config();
}
if(!function_exists('dd'))
{
function dd($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	die;
}
}

if(!function_exists('redirect'))
{
	function redirect($uri = '', $method = 'auto', $code = NULL)
	{
		if ( ! preg_match('#^(\w+:)?//#i', $uri))
		{
			$uri = site_url($uri);
		}

		if ($method === 'auto' && isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS') !== FALSE)
		{
			$method = 'refresh';
		}
		elseif ($method !== 'refresh' && (empty($code) OR ! is_numeric($code)))
		{
			if (isset($_SERVER['SERVER_PROTOCOL'], $_SERVER['REQUEST_METHOD']) && $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1')
			{
				$code = ($_SERVER['REQUEST_METHOD'] !== 'GET')
					? 303	// reference: http://en.wikipedia.org/wiki/Post/Redirect/Get
					: 307;
			}
			else
			{
				$code = 302;
			}
		}

		switch ($method)
		{
			case 'refresh':
				header('Refresh:0;url='.$uri);
				break;
			default:
				header('Location: '.$uri, TRUE, $code);
				break;
		}
		exit;
	}
}
?>