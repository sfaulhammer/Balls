<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 07.05.2018
 * Time: 11:16
 */
namespace sfaulhammer\baelle;

class PingPongBall extends ball implements ballsInter
{
    function __construct(string $name, float $width, string $material)
    {
        parent::__construct($name,$width,$material);
    }
    function volume(): float
    {
        return (3 / 4) * pi() * ($this->getWidth() / 2);
    }

}