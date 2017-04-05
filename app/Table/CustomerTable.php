<?php namespace App\Table;
 
use Core\Table\Table;

/**
* Classe Client
*/
class CustomerTable extends Table
{
    public function findCustomer($id)
    {
        return $this->query("SELECT customers.id,
            customers.lastName,
            customers.firstName,
            customers.birthDate,
            customers.phoneNumber,
            customers.zipCode,
            customers.adress,
            maritalStatus.status
            FROM customers 
            LEFT JOIN maritalStatus
            ON customers.maritalStatusId = maritalStatus.id
            WHERE customers.id = ?" ,[$id], true);
    }

    public function allCustomers()
    {
        return $this->query("SELECT 
            customers.id,
            customers.lastName,
            customers.firstName,
            customers.birthDate,
            customers.phoneNumber,
            customers.zipCode,
            customers.adress,
            maritalStatus.status
            FROM customers 
            LEFT JOIN maritalStatus
            ON customers.maritalStatusId = maritalStatus.id");
    }
}
 