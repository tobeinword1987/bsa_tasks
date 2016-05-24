<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 24.05.16
 * Time: 21:50
 */

trait RandomQuote{

    function getRandomQuote()
    {
        return rand(0,9);
    }
}

class Greeting
{
    use RandomQuote;

    function say($name)
    {
        $quotes=['It is a good day today.',
            'I am glad to see you!',
            'Be happy!',
            'Life is good!',
            'Faith,Hope are important but Love is the best!',
            'Life is great!',
            'Life is beautifull',
            'Have a nice day!',
            'Nature has not bad weather.',
            'This is the last quote!'];
        echo "Hi, $name! There is a new quote for you: ".$quotes[$this->getRandomQuote()].PHP_EOL;
    }
}