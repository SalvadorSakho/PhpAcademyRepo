<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.02.2017
 * Time: 23:44
 */

include_once("Animal.php");

class Cat extends Animal
{
    private $catName;

    function getName()
    {
        return $this->catName = parent::getName();
    }

    function meow()
    {
        return "Cat " . Cat::getName() . " is saying meow";
    }

}

$cat = new Cat ('garfield');

echo "<pre>";
echo $cat->getName() === 'garfield' ? "True" : "False";
echo "<pre>";
echo $cat->meow() === 'Cat garfield is saying meow' ? "True" : "False";

?>