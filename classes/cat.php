<?php

class Cat extends Pet{

    public function scratch(){
        echo "<p>". $this->getName() . " is scratching.</p>";
    }

    public function talk(){
        echo "<p>" . $this->getName() . " is meowing.</p>";
    }
}