<?php
namespace FishAndPlaces\Infrastructure\Dam\Repository\Doctrine\ORM;

use FishAndPlaces\Domain\Dam\Repository\DamImageRepository;
use FishAndPlaces\Domain\Dam\Model\DamImage;
use FishAndPlaces\Infrastructure\Core\Repository\Doctrine\ORM\DoctrineRepository;

class DoctrineDamImageRepository extends DoctrineRepository implements DamImageRepository
{
    /**
     * @param int $damId
     *
     * @return DamImage[]
     */
    public function findByDam($damId)
    {
        // TODO: Implement findByDam() method.
    }

    /**
     * @param DamImage $dam
     */
    public function update(DamImage $dam)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param DamImage $dam
     */
    public function remove(DamImage $dam)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param DamImage $dam
     */
    public function add(DamImage $dam)
    {
        // TODO: Implement add() method.
    }
}
