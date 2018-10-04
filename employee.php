<?php

class employee{
    private $id;
    private $age;
    private $salary;
    private $address;
    private $tax;

    public function calcSalary(){
        return $this->salary - ($this->salary * $this->tax / 100); 
    }

    public function __construct($name, $age, $tax, $salary, $address){
        $this->age      = $age;
        $this->name     = $name;
        $this->tax      = $tax;
        $this->salary   = $salary;
        $this->address  = $address;
    }
    

    public function __get($param){
        return $this->$param;
    }
}