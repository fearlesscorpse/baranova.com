<?php
    //Задание 1
    abstract class Figure {
        protected $square;
        protected $color;
        protected $numberOfSides;

        public function __construct($color = 'Белый') {
            $this->color=$color;
        }

        //Задание 2
        abstract public function infoAbout();
    }
    //Задание 3
    class Rectangle extends Figure implements iFigure {
        //Задание 5
        private $a;
        private $b;
        //Задание 8, 9
        public function __construct ($a, $b, $color='Черный') {
            parent::__construct($color);
            $this->a=$a;   
            $this->b=$b;    
            $this->numberOfSides=4;
        }
        //Задание 10
        public function getArea() { 
            return $this->a*$this->b;
        }
        //Задание 11
        public function infoAbout() {
            return "Это класс прямоугольника. У него " . ($this->numberOfSides) . " стороны";         
        }
    }
    class Triangle extends Figure implements iFigure {
        //Задание 7
        private $a;
        private $b;
        private $c;
        //Задание 8, 9
        public function __construct ($a, $b, $c, $color='Красный') {
            parent::__construct($color);
            $this->a=$a;   
            $this->b=$b; 
            $this->c=$c;   
            $this->numberOfSides=3;
        }
        //Задание 10
        public function getArea() { 
            $p = ($this->a+$this->b+$this->c)/2;
            $s= sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
            return $s;
        }
        //Задание 11
        public function infoAbout() {
            return "Это класс треугольника. У него " . ($this->numberOfSides) . " стороны";         
        }
    }
    class Square extends Figure implements iFigure {
        //Задание 6
        private $a;
        //Задание 8, 9
        public function __construct ($a, $color='Синий') {
            parent::__construct($color);
            $this->a=$a;    
            $this->numberOfSides=4;
        }
        //Задание 10
        public function getArea() { 
            return $this->a*$this->a;
        }
        //Задание 11
        public function infoAbout() {
            return "Это класс квадрата. У него " . ($this->numberOfSides) . " стороны";         
        }
    }
    //Задание 4
    interface iFigure {
        public function getArea();    
    }
    
    //Задание 12
    $r1 = new Rectangle(5,8);
    $r2 = new Rectangle(2,10);

    $s1 = new Square(5);
    $s2 = new Square(5);

    $t1 = new Triangle(3,4,5);
    $t2 = new Triangle(6,7,8);
    
    //Задание 13
    echo "Прямоугольник 1: площадь = " . $r1->getArea() . "<br>";
    echo "Прямоугольник 2: площадь = " . $r2->getArea() . "<br>";

    echo "Квадрат 1: площадь = " . $s1->getArea() . "<br>";
    echo "Квадрат 2: площадь = " . $s2->getArea() . "<br>";

    echo "Треугольник 1: площадь = " . $t1->getArea() . "<br>";
    echo "Треугольник 2: площадь = " . $t2->getArea() . "<br>";
?>
