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
use FishingAndPlaces\Domain\Dam\Model\Dam;
use FishingAndPlaces\Domain\Fish\Model\Fish;

class DamImageCommand implements CommonCommand
{
    /**
     * @var Dam
     */
    private $dam;

    /**
     * @var string
     */
    private $imageSrc;

    /**
     * @param Dam $dam
     * @param string $imageSrc
     */
    public function __construct(Dam $dam, $imageSrc)
    {
        $this->dam = $dam;

        $this->imageSrc = $imageSrc;
    }

    /**
     * @return Dam
     */
    public function getDam()
    {
        return $this->dam;
    }

    /**
     * @return string
     */
    public function getImageSrc()
    {
        return $this->imageSrc;
    }
}