<?php

class Cat extends Pet{

    function eat(){
        echo "<p>" . $this->getName() . "is eating.</p>";
    }

    function scratch(){
        echo "<p>". $this->getName() . "is scratching.</p>";
    }
}