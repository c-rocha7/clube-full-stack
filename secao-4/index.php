<?php

require "vendor/autoload.php";

class Resize
{
	public function resize()
	{
		return "resize";
	}
}

class UploadFoto
{
	public function upload(ValidateExtension $validate)
	{
		$resize = new Resize;
	}
}
