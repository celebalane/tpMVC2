<?php

namespace App\Entity;
use Core\Entity\Entity;

/**
* 
*/
class CustomerEntity extends Entity
{
	public function getAdressComplete()
	{
		return $this->adress.'  ['.$this->zipCode.' ]';
	}
}