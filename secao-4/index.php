<?php

require "vendor/autoload.php";

class ShoppingCart
{
	private $get = [];
	private $products = [];

	public function __toString()
	{
		return "Chamando o toString";
	}

	// public function __call($name, $parameters)
	// {
	// 	$this->products[] = $parameters;
	// }

	// public function products()
	// {
	// 	return $this->products;
	// }

	// public function __set($name, $value)
	// {
	// 	if (!property_exists($this, $name)) {
	// 		$this->get[$name][] = $value;
	// 	}

	// 	throw new \Exception("Essa propriedade já existe");
	// }

	// public function __get($name)
	// {
	// 	var_dump($this->get[$name]);
	// }
}


$shoppingCart = new ShoppingCart;
echo $shoppingCart;
// $shoppingCart->add('Monitor');
// $shoppingCart->add('Mouse');
// var_dump($shoppingCart->products('Monitor'));
