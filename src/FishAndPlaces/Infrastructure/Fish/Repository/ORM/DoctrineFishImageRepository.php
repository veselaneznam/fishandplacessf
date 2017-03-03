<?php

namespace FishAndPlaces\Infrastructure\Fish\Repository\Doctrine\ORM;

use FishAndPlaces\Infrastructure\Core\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\Domain\Fish\Model\FishImage;
use FishAndPlaces\Domain\Fish\Repository\FishImageRepository;

class DoctrineFishImageRepository extends DoctrineRepository implements FishImageRepository
{

    /**
     * @param FishImage $fishImage
     */
    public function update(FishImage $fishImage)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param FishImage $fishImage
     */
    public function remove(FishImage $fishImage)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param FishImage $fishImage
     */
    public function add(FishImage $fishImage)
    {
        // TODO: Implement add() method.
    }
}
