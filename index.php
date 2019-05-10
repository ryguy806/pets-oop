<?php

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//New class instance
require('classes/pet.php');
require('classes/dog.php');
require('classes/cat.php');

$f3 = Base::instance();

$f3->route('GET /', function ($f3) {

//    //Instantiate the pet class
//    $pet1 = new Pet();
//    $f3->set('pet1', $pet1);
//
//    $view = new Template();
//    echo $view->render('views/my-pets.html');

    $pet1 = new Pet();
    $pet1->setName('Franky');
    echo($pet1->getName());

    $pet2 = new Pet('JoJo');
    $pet2->setName("Roger");
    echo($pet2->getName());

    $pet3 = new Dog("Billy", "Green");
    $pet4 = new Cat("Optimus Prime","Red");

    $f3->set('pet2', $pet2);
    $f3->set('pet3', $pet3);
    $f3->set('pet4', $pet4);

    $pets = array($pet1, $pet2, $pet3, $pet4);

    foreach($pets as $pet){
        $pet->talk();
    }
});

$f3->run();