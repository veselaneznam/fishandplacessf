<?php

namespace FishAndPlaces\Application\Dam;

use FishAndPlaces\Domain\Dam\Value\Location;
use FishAndPlaces\Domain\Dam\Value\Rating;
use FishAndPlaces\Domain\Dam\Model\Dam;
use FishAndPlaces\Domain\Fish\Model\Fish;

class DamRepresenter
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
     * @var bool
     */
    private $isActive;

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
     * @var int
     */
    private $id;

    /**
     * @param Dam $dam
     */
    public function __construct(Dam $dam)
    {
        $this->id = $dam->getId();
        $this->name = $dam->getName();
        $this->location = $dam->getLocation();
        $this->isActive = $dam->isActive();
        $this->priceProPerson = $dam->getPriceProPerson();
        $this->fishCollection = $dam->getFishCollection();
        $this->rating = $dam->getRating();
        $this->createdAt = $dam->getCreatedAt();
        $this->updatedAt = $dam->getUpdatedAt();
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
     * @return bool
     */
    public function isIsActive()
    {
        return $this->isActive;
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Dam
     */
    public function revertToModel()
    {
        return new Dam(
            $this->name,
            $this->location,
            $this->priceProPerson,
            $this->fishCollection,
            $this->rating,
            $this->isActive
        );
    }
}
