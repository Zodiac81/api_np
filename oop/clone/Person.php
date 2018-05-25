<?php

include 'Account.php';

class Person{

    private $name;
    private $age;
    private $id;
    public $account;

    function __construct($name, $age, Account $account)
    {
        $this->name = $name;
        $this->age  = $age;
        $this->account = $account;
    }

    public function getId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.

        $this->id = 0;
        $this->account = clone $this->account;
    }
//    public function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//
//        echo "Object has been deleted";
//    }
}