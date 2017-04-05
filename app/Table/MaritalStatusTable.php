<?php
    namespace App\Table;

    use Core\Table\Table;

    class MaritalStatusTable extends Table
    {
        public function getStatut(){
            return $this->query("SELECT * FROM maritalStatus");
        }
    }