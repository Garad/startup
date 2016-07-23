<?php
namespace Acme;
/**
* A person
*/
class Person
{
	protected $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}

}