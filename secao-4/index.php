<?php

require "vendor/autoload.php";

abstract class Model
{
	public function all()
	{
		return 'todos registros';
	}

	public function find($id)
	{
		return "Encontrando o user com o id {$id}";
	}

	abstract public function create();
}

class User extends Model
{
	public function create()
	{
		
	}
}

class Login
{
	private $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function logar()
	{
		return $this->model->find(12);
	}
}

$login = new Login(new User);
echo $login->logar();
