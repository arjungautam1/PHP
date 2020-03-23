<?php
    class Rectangle
    {
        public $length=10;
        public $breadth=5;

        public function getPerimeter()
        {
            return(2*($this->length + $this->breadth));
        }
        public function getArea()
        {
            return($this->length * $this->breadth);
        }
    }
?>