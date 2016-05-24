<?php
/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 24.05.16
 * Time: 19:20
 */

require __DIR__.'/vendor/autoload.php';

class Application{

    public function run(){

        //Получение генерируемой цитаты приветствия
        $greeting=new Greeting();
        $greeting->say("Lyudmila");

        //Формирование ряда из треугольных чисел
        $triangleNumbers_ex=new MyGenerator(15);
        foreach ($triangleNumbers_ex->getTriangularNumber() as $nextNumber)
        {
            echo $nextNumber.",";
        }

        //Распределение персонажей вселенной Marvel по городу рождения
        echo '\r\n';
        Thor::whoami();
        IronMan::whoami();
        Wasp::whoami();
        Hank_Pym::whoami();
        WonderMan::whoami();
        Beast::whoami();
        CapitanBritain::whoami();
    }
}


$var=new Application();
$var->run();




