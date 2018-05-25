<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 23.05.18
 * Time: 12:54
 */

class Account
{
    public $balance;

    function __construct($balance)
    {
        $this->balance = $balance;
    }
}