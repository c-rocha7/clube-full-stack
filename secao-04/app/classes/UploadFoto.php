<?php

namespace app\classes;

class UploadFoto extends Upload
{
	protected $extensions = ['png', 'jpg'];

	public function newName()
	{
		return $this->newName;
	}

	public function upload()
	{
		$this->rename();
		// return "Gerou a foto {$this->rename()}";
	}
}
