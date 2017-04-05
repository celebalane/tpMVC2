<?php 

namespace App\Table;
use Core\Table\Table;

/**
* Classe Client
*/
class CreditTable extends Table
{
	public function findCredit($id)
	{
		$credit = $this->query("SELECT customers.lastName,
									customers.firstName,
									customers.birthDate,
									customers.adress,
									customers.zipCode,
									customers.phoneNumber,
									credits.society,
									credits.amount
									FROM customers
					  				LEFT JOIN credits
					  				ON customers.id = credits.userId");
		if ($credit) {
			return $credit;
		}else{
			return $this->query("SELECT customers.lastName,
									customers.firstName,
									customers.birthDate,
									customers.adress,
									customers.zipCode,
									customers.phoneNumber,
									credits.society,
									credits.amount
									FROM customers");
		}
	}
}