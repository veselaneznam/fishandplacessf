<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/22/16
 * Time: 8:21 PM
 */

namespace FishAndPlaces\Application\Dam;

use FishAndPlaces\Application\CommonCommand;
use FishAndPlaces\Domain\Dam\Model\DamImage;

class DamImageCommand implements CommonCommand
{
    /**
     * @var DamRepresenter
     */
    private $dam;

    /**
     * @var string
     */
    private $imageSrc;

    /**
     * @param DamImageRepresenter $damImageRepresenter
     */
    public function __construct(DamImage $damImageRepresenter)
    {
        $this->dam = $damImageRepresenter->getDam();

        $this->imageSrc = $damImageRepresenter->getImageSrc();
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
