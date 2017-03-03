<?php

namespace FishAndPlaces\Domain\Dam\Value;

use Doctrine\Common\Proxy\Exception\InvalidArgumentException;

class Rating
{
    /**
     * @var int
     */
    private $rating;

    /**
     * @param int $rating
     */
    public function __construct($rating)
    {
        if (is_string($rating) || is_array($rating)) {
            throw new InvalidArgumentException('Rating can be int or float type');
        }
        $this->rating = $rating;
    }
}
