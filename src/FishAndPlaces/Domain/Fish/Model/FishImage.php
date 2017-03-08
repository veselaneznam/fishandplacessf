<?php

namespace FishAndPlaces\Domain\Fish\Model;

class FishImage
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Fish
     */
    private $fish;

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
     * @param Fish   $fish
     * @param string $imageSrc
     */
    public function __construct(Fish $fish, $imageSrc)
    {
        $this->fish = $fish;

        $this->imageSrc = $imageSrc;

        $this->createdAt = new \DateTime();

        $this->updatedAt = new \DateTime();
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
     * @return Fish
     */
    public function getFish()
    {
        return $this->fish;
    }

    /**
     * @return string
     */
    public function getImageSrc()
    {
        return $this->imageSrc;
    }
}
