<?php
class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;

       return $area;
   }
}

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;

        return $area;
    }
}

interface ISquare
{
    function squareArea(int $sideSquare);
}

interface ICircle
{
    function circleArea(int $circumference);
}

class Circle implements ICircle {
    function circleArea(int $circumference) {

        $diagonal = $circumference / pi();
        $circleAreaLib = new CircleAreaLib();
        $result = $circleAreaLib->getCircleArea($diagonal);
        return $result;
    }
}

class Square implements ISquare {
    function squareArea(int $sideSquare) {

        $diagonal = $sideSquare * sqrt(2.0);
        $squareAreaLib = new SquareAreaLib();
        $result = $squareAreaLib->getSquareArea($diagonal);
        return $result;
    }
}

function test1() {
    $squareArea = new Square();
    return $squareArea->squareArea(5);
}

function test2() {
    $circleArea = new Circle();
    return $circleArea->circleArea(5);
}


echo test1();

echo "</br>";

echo test2();