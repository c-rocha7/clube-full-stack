<?php

namespace app\classes;

class UploadFoto extends Upload
{
	const PROPRIEDADE_TEST = 'propriedade teste';
	public static $propriedade_teste = 'propriedade teste';

	protected $extensions = ['png', 'jpg'];

	public static function teste()
	{
		return 'teste';
	}

	public function upload()
	{
		// return "Gerou a foto {$this->rename()}";
		// return $this->test();
	}
}
