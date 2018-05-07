<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 07.05.2018
 * Time: 23:11
 */

namespace htl3r\ajaxball;


class Fußball extends AbstractBall implements BallInterface{
    /**
     * @return float
     */
    public function getVolumen(): float
    {
        return (1/3)*4*($this->durchmesser/2)*($this->durchmesser/2)*($this->durchmesser/2)*pi();
    }

    function __construct(string $name, float $durchmesser, string $material)
    {
        $this->name = $name;
        $this->durchmesser = $durchmesser;
        $this->material = $material;

    }



}