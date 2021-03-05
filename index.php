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

        $diagonal = ($sideSquare * 2) / sqrt(2);
        $squareAreaLib = new SquareAreaLib();
        $result = $squareAreaLib->getSquareArea($diagonal);
        return $result;
    }
}