<?php

require "vendor/autoload.php";

abstract class Email
{
	public function __construct()
	{
		# code...
	}

	public static function who()
	{
		return "Cauã";
	}

	public static function send()
	{
		return static::who();
	}
}

class SendEmail extends Email
{
	public function Teste()
	{
		return 'Teste';
	}

	public static function who()
	{
		return $this->Teste();
	}
}

echo SendEmail::send();
