<?php

require "vendor/autoload.php";

abstract class Login
{
	abstract public function logar();
}

class LoginUser extends Login
{
	public function logar()
	{
		
	}
}

$login = new LoginUser();
