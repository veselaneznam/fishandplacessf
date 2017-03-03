<?php
namespace FishAndPlaces\Infrastructure\Dam\Repository\Doctrine\ORM;

use FishAndPlaces\Domain\Dam\Repository\DamRepository;
use FishAndPlaces\Domain\Dam\Model\Dam;
use FishAndPlaces\Infrastructure\Core\Repository\Doctrine\ORM\DoctrineRepository;

class DoctrineDamRepository extends DoctrineRepository implements DamRepository
{

    /**
     * @param Dam $dam
     */
    public function update(Dam $dam)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param Dam $dam
     */
    public function remove(Dam $dam)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param Dam $dam
     */
    public function add(Dam $dam)
    {
        // TODO: Implement add() method.
    }
}
