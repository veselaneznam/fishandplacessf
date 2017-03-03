<?php

/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/20/16
 * Time: 1:14 PM
 */

namespace FishAndPlaces\Domain\Fish\Model;

use FishAndPlaces\Domain\Dam\Value\Location;
use FishAndPlaces\Domain\Dam\Model\Dam;

class Fish
{
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
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @param          $name
     * @param Location $location
     * @param Dam      $dam
     */
    public function __construct($name, Location $location, Dam $dam)
    {

        $this->name = $name;
        $this->location = $location;
        $this->dam = $dam;
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
}
