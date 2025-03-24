<?php

//Nivell 1 - Exercici 1
echo "<br>N1 - E1 <br>";

abstract class Animal
{
    public $name;

    function makeSound() {}
};

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Bup, bup!";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Miau, miau!";
    }
}

$dog1 = new Dog();
$cat1 = new Cat();

echo "El gos fa: ";
$dog1->makeSound();
echo "<br>";

//Nivell 2 - Exercici 1
echo "<br>N2 - E1 <br>";

abstract class Shape0
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public abstract function area();
}

class Triangle0 extends Shape0
{
    public function area()
    {
        return ($this->height * $this->width) / 2;
    }
}

class Rectangle0 extends Shape0
{
    public function area()
    {
        return $this->height * $this->width;
    }
}

$triangle1 = new Triangle0(5, 10);
$rectangle1 = new Rectangle0(5, 10);

echo "L'àrea del triangle és: " . $triangle1->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle1->area() . "<br>";
echo "<br>";

//Nivell 3 - Exercici 1
echo "<br>N3 - E1 <br>";

interface Shape1
{
    public function area();
}

class Triangle1 implements Shape1
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle1 implements Shape1
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Cercle1 implements Shape1
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}

$triangle2 = new Triangle1(5, 3);
$rectangle2 = new Rectangle1(8, 6);
$cercle2 = new Cercle1(5);

echo "L'àrea del triangle és: " . $triangle2->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle2->area() . "<br>";
echo "L'àrea del cercle és: " . $cercle2->area() . "<br>";
