<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/20/16
 * Time: 1:03 PM
 */

namespace FishingAndPlaces\Dam\Domain\Model\Value;


class Location
{
    /**
     * @var string
     */
    private $lat;

    /**
     * @var string
     */
    private $lng;

    /**
     * Location constructor.
     * @param string $lat
     * @param string $lng
     */
    public function __construct($lat, $lng)
    {
        $this->validate($lat, $lng);

        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    private function validate($lat, $lng)
    {
        //@Todo: use goodle maps api to make validation
    }
}