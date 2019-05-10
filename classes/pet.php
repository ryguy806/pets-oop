<?php
//pet.php
//This is the pet class

class Pet{
    private $_name;
    private $_color;

    public function __construct($name='unknown', $color='?'){
        $this->_name = $name;
        $this->_color=$color;
    }

    public function eat(){
        echo "<p>".$this->_name . " is eating.</p>"; //Note, no $ is used on the name variable.
    }

    public function sleep(){
        echo "<p>".$this->_name . " is sleeping.</p>";
    }

    public function getName(){
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getColor()
    {
        return $this->_color;
    }

    public function setColor($color)
    {
        $this->_color = $color;
    }

    public function talk(){
        echo "<p>" . $this->_name . " is talking.</p>";
    }
}