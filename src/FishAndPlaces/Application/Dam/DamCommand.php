<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/22/16
 * Time: 8:21 PM
 */

namespace FishingAndPlaces\Dam\Applicaiton\Dam;

use FishingAndPlaces\Dam\Application\CommonCommand;
use FishingAndPlaces\Dam\Domain\Model\Value\Location;
use FishingAndPlaces\Dam\Domain\Model\Value\Price;
use FishingAndPlaces\Dam\Domain\Model\Value\Rating;
use FishingAndPlaces\Domain\Fish\Model\Fish;

class DamCommand implements CommonCommand
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var Location
     */
    private $location;
    /**
     * @var Price
     */
    private $price;
    /**
     * @var array
     */
    private $fishCollection;

    /**
     * @var Rating
     */
    private $rating;

    /**
     * CreateDamCommand constructor.
     *
     * @param string   $name
     * @param Location $location
     * @param Price    $price
     * @param Fish[]   $fishCollection
     * @param Rating   $rating
     */
    public function __construct( $name, Location $location, Price $price, array $fishCollection, Rating $rating)
    {
        $this->name = $name;
        $this->location = $location;
        $this->price = $price;
        $this->fishCollection = $fishCollection;
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getFishCollection()
    {
        return $this->fishCollection;
    }

    /**
     * @return Rating
     */
    public function getRating()
    {
        return $this->rating;
    }
}