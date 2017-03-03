<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/22/16
 * Time: 8:21 PM
 */

namespace FishAndPlaces\Application\Dam;

use FishAndPlaces\Domain\Dam\Model\Dam;
use FishAndPlaces\Domain\Dam\Value\Location;
use FishAndPlaces\Domain\Dam\Value\Rating;
use FishAndPlaces\Application\CommonCommand;

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
     * @var float
     */
    private $priceProPerson;
    /**
     * @var array
     */
    private $fishCollection;

    /**
     * @var Rating
     */
    private $rating;

    /** @var bool*/
    private $isActive;

    /**
     * @param Dam $dam
     */
    public function __construct(Dam $dam)
    {
        $this->name = $dam->getName();
        $this->location = $dam->getLocation();
        $this->priceProPerson = $dam->getPriceProPerson();
        $this->fishCollection = $dam->getFishCollection();
        $this->rating = $dam->getRating();
        $this->isActive = $dam->isActive();
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

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive();
    }
}
