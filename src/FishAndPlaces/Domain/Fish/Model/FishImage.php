<?php

namespace FishAndPlaces\Domain\Fish\Model;

class FishImage
{
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
