<?php

namespace FishAndPlaces\Domain\Dam\Model;

class DamImage
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Dam
     */
    private $dam;

    /**
     * @var string
     */
    private $imageSrc;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @param Dam $dam
     * @param string $imageSrc
     */
    public function __construct(Dam $dam, $imageSrc)
    {
        $this->dam = $dam;

        $this->imageSrc = $imageSrc;

        $this->createdAt = new \DateTime();

        $this->updatedAt = new \DateTime();
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
}
