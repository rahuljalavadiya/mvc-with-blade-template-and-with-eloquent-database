<?php
session_start();
Class Auth
{
	protected $user;
	public function __construct()
	{
		$this->user = new StdClass();
		$this->user->name = '';
		$this->user->role = '';
		$this->user->email = '';
		$this->user->is_active = '';
		$this->user->is_login = 0;
	}

	public function check()
	{
		if($this->user->is_login > 0 )
		{
			return true;
		}
		return false;
	}

	public function user()
	{
		return $this->user;	
	}

	public function is_admin()
	{
		if($this->user->role==1)
		{
			return true;
		}
		return false;
	}

}
if(!isset($GLOBALS['auth']))
{
	$GLOBALS['auth']  = new Auth();
}