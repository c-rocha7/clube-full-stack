<?php

namespace app\classes;

class Upload
{
	public $file;
	public $newName;

	public function __construct($file)
	{
		$this->file = $file;
	}

	public function extension()
	{
		return pathinfo($this->file, PATHINFO_EXTENSION);
	}
	
	public function rename()
	{
		$uniqId = uniqid(true);
		$this->newName = $uniqId . '.' . $this->extension();
	}
}
