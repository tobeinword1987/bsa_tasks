<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 24.05.16
 * Time: 21:11
 */
class MyGenerator
{
    public $chislo=0;
    public function __construct($n)
    {
        $this->chislo=$n;
    }

    function getTriangularNumber()
    {
        $i = 0;
        if (is_int($this->chislo) and ($this->chislo<=15) and ($this->chislo>=1))
        while ($i < $this->chislo) {
            yield ($i * ($i + 1)) / 2;
            $i++;
        }
        else{
            yield "Передаваемое значение при создании экземпляра класса Generator должно быть натуральным числом и не более 15!";
        }
    }
}