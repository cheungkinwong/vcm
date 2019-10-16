<?php
declare(strict_types=1);
class CustomerLoader
{
    public function loadCustomers() : array{
        $list = [];
        $json = json_decode(file_get_contents('Data/customer.json'),true);
        foreach ($json as $customerJson) {
            $list[] = new Customer($customerJson["id"],$customerJson["name"],$customerJson["group_id"]);
        }
        return $list;
    }
    public function loadById(int $customerId):? customer{
        $json = json_decode(file_get_contents('Data/customer.json'),true);
        foreach ($json as $customerJson) {
            if($customerJson['id'] === $customerId ){
                return new Customer($customerJson["id"],$customerJson["name"],$customerJson["group_id"]);
            }
        }
        return null;
    }
}
?>

