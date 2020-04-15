<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$shapes = [];
$circle = new interface_colorable\Circle("Circle", 10);
$rectangle = new interface_colorable\Rectangle("Rectangle", 6, 4);
$square = new interface_colorable\Square("Square", 5);
array_push($shapes, $circle, $rectangle, $square);

foreach ($shapes as $shape) {
    if ($shape instanceOf interface_colorable\Square) {
        echo $shape->howtoColor();
    }
}