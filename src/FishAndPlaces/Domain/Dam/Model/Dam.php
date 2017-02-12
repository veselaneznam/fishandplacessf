<?php

/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/20/16
 * Time: 1:00 PM
 */

namespace FishingAndPlaces\Domain\Dam\Model;

use FishingAndPlaces\Dam\Domain\Model\Value\Location;
use FishingAndPlaces\Dam\Domain\Model\Value\Price;
use FishingAndPlaces\Dam\Domain\Model\Value\Rating;
use FishingAndPlaces\Domain\Fish\Model\Fish;

class Dam
{
    /**
     * @var int
     */
    private $id;

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
     * @var Fish[]
     */
    private $fishCollection;

    /**
     * @var Rating
     */
    private $rating;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * Dam constructor.
     *
     * @param string   $name
     * @param Location $location
     * @param Price    $price
     * @param Fish[]   $fishCollection
     * @param Rating  $rating
     */
    public function __construct($name, Location $location, Price $price, array $fishCollection, $rating)
    {
        $this->name = $name;
        $this->location = $location;
        $this->price = $price;
        $this->fishCollection = $fishCollection;
        $this->rating = $rating;
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
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
     * @return Fish[]
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

    /**
     * @param Rating $rating
     */
    public function setRating(Rating $rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}