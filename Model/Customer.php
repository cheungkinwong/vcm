<?php
declare(strict_types=1);
class Group 
{
    private $id;
    private $name;
    private $variable_discount;
    private $group;

    public function __construct(int $_id, string $_name, int $variable_discount, int $_group){
        $this ->id = $_id;
        $this ->name = $_name;
        $this ->variable_discount = $_variable_discount;
        $this ->group = $_group;
    }
}
class Customer
{
    private $id;
    private $name;
    private $group;

    public function __construct(int $_id, string $_name, int $_group){
        $this ->id = $_id;
        $this ->name = $_name;
        $this ->group = $_group;
    }

    public function getId():int{
        return $this->id; 
    }
    public function getName():string{
        return $this->name; 
    }
    public function getGroup():int{
        return $this->group; 
    }
}