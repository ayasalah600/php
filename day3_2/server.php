<?php
class Circle {
   
    private $radius;
    private $color;

   
    public function __construct($radius = 4, $color = "green") {
        $this->radius = $radius;
        $this->color = $color;
    }

   
    public function setRadius($radius) {
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            echo "error.\n";
        }
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

 
    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    
    public function __toString() {
        return "Circle[radius={$this->radius}, color={$this->color}]";
    }
}

class Cylinder extends Circle {
  
    private $height;

    
    public function __construct($radius = 1.0, $height = 1.0, $color = "red") {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    
    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        if ($height > 0) {
            $this->height = $height;
        } else {
            echo "error.\n";
        }
    }

    
    public function getVolume() {
        return $this->getArea() * $this->height;
    }

    
    public function __toString() {
        return "Cylinder[" . parent::__toString() . ", height={$this->height}]";
    }
}


$circle = new Circle(5, "blue");
echo $circle . "\n"."<br>";

$cylinder = new Cylinder(5, 10, "red");
echo $cylinder . "\n"."<br>"; 
echo "cylinder= " . $cylinder->getVolume() . "\n"; 
?>
