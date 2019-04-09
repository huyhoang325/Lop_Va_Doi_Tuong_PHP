<?php
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    class FanMachine {
        private $speed = SLOW;
        private $switch = false;
        private $radius = 5;
        private $color = "blue";

        public function _construct($speed,$radius,$color,$switch){
            $this->speed = $speed;
            $this->radius = $radius;
            $this->color = $color;
            $this->switch = $switch;
        }

        public function setSpeed($speed){
            $this->speed = $speed;
        }

        public function getSpeed(){
            return $this->speed;
        }

        public function isSeton($switch){
            $this->switch = $switch;
        }

        public function isGeton(){
            return $this->switch;
        }

        public function setRadius($radius){
            $this->radius = $radius;
        }

        public function getRadius(){
            return $this->radius;
        }

        public function setColor($color){
            $this->color = $color;        }

        public function getColor(){
            return $this->color;
        }

    }

    $fan = new FanMachine();
    $fan->isSeton(true);
    if ($fan->isGeton()){
        echo "Fan is turn on"."<br>";
        echo "Speed: ".$fan->getSpeed()."<br>";
        echo "Radius: ".$fan->getRadius()."<br>";
        echo "Color: ".$fan->getColor()."<br>";
    }else {
        echo "Fan is turn off"."<br>";
        echo "Radius: ".$fan->getRadius()."<br>";
        echo "Color: ".$fan->getColor()."<br>";
    }