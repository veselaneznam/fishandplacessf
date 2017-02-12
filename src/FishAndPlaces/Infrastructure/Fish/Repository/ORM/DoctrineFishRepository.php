<?php

namespace FishAndPlaces\Infrastructure\Fish\Repository\Doctrine\ORM;

use FishAndPlaces\Infrastructure\Core\Repository\Doctrine\ORM\DoctrineRepository;
use FishingAndPlaces\Domain\Fish\Model\Fish;
use FishingAndPlaces\Domain\Fish\Repository\FishRepository;

class DoctrineImageRepository extends DoctrineRepository implements FishRepository
{

    /**
     * @param Fish $fishImage
     */
    public function update(Fish $fishImage)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param Fish $fishImage
     */
    public function remove(Fish $fishImage)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param Fish $fishImage
     */
    public function add(Fish $fishImage)
    {
        // TODO: Implement add() method.
    }
}