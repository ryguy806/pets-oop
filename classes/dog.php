<?php

class Dog extends Pet{

    public function fetch(){
        echo "<p>" . $this->getName() . " played fetch.</p>";
    }

    public function talk(){
        echo "<p>" . $this->getName() . " is barking.</p>";
    }
}