<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.02.2017
 * Time: 23:34
 */
class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

?>
