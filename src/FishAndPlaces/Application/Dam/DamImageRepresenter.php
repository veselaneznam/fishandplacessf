<?php

namespace FishAndPlaces\Application\Dam;

use FishAndPlaces\Domain\Dam\Model\DamImage;

class DamImageRepresenter
{
    /** @var DamRepresenter */
    private $dam;

    /** @var string */
    private $imageSrc;

    /** @var \DateTime */
    private $createdAt;

    /** @var \DateTime */
    private $updatedAt;

    /**
     * @param DamImage $damImage
     */
    public function __construct(DamImage $damImage)
    {
        $this->dam = new DamRepresenter($damImage->getDam());
        $this->imageSrc = $damImage->getImageSrc();
        $this->createdAt = $damImage->getCreatedAt();
        $this->updatedAt = $damImage->getUpdatedAt();
    }

    /**
     * @return DamRepresenter
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

    public function revertToModel()
    {
        return new DamImage($this->getDam()->revertToModel(), $this->getImageSrc());
    }
}
