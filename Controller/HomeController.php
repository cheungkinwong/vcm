<?php
declare(strict_types=1);
class HomeController 
{
    public function render (int $customerId) {
        $loader = new CustomerLoader();
        $customer = $loader->loadById($customerId);
        $allCustomers = $loader->loadCustomers();

        require 'View/home.php';
    }
}