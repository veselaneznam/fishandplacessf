<?php

/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/20/16
 * Time: 1:00 PM
 */

namespace FishAndPlaces\Domain\Dam\Model;

use FishAndPlaces\Domain\Dam\Value\Location;
use FishAndPlaces\Domain\Dam\Value\Rating;
use FishAndPlaces\Domain\Fish\Model\Fish;

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
     * @var float
     */
    private $priceProPerson;

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
     * @var bool
     */
    private $isActive;

    /**
     * Dam constructor.
     *
     * @param string   $name
     * @param Location $location
     * @param float    $price
     * @param Fish[]   $fishCollection
     * @param Rating      $rating
     * @param bool     $isActive
     */
    public function __construct($name, Location $location, $price, array $fishCollection, Rating $rating, $isActive)
    {
        $this->name = $name;
        $this->location = $location;
        $this->priceProPerson = $price;
        $this->fishCollection = $fishCollection;
        $this->rating = $rating;
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->isActive = $isActive;
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
     * @return float
     */
    public function getPriceProPerson()
    {
        return $this->priceProPerson;
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

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }
}
