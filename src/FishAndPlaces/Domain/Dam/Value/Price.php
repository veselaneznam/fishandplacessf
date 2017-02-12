<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/20/16
 * Time: 1:26 PM
 */

namespace FishingAndPlaces\Dam\Domain\Model\Value;


class Price
{
    /**
     * @var float
     */
    private $price;

    /**
     * Price constructor.
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}