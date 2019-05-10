<?php
//pet.php
//This is the pet class

class Pet{
    private $_name;
    private $_color;

    function __construct($name='unknown', $color='?'){
        $this->_name = $name;
        $this->_color=$color;
    }

    function eat(){
        echo "<p>".$this->_name . " is eating.</p>"; //Note, no $ is used on the name variable.
    }

    function sleep(){
        echo "<p>".$this->_name . " is sleeping.</p>";
    }

    function getName(){
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
}