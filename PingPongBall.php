<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 07.05.2018
 * Time: 11:16
 */
require_once ("Balls.php");
require_once ("ballsInter.php");

class PingPongBall extends ball implements ballsInter
{
    function __construct(string $name, float $width, string $material)
    {
        parent::__construct($name,$width,$material);
    }
    function volume(): float
    {
        return (3 / 4) * pi() * ($this->width / 2);
    }
    function getMaterial()
    {
        return $this->material;
    }
}