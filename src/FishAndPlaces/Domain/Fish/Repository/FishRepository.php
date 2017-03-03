<?php
namespace FishAndPlaces\Domain\Fish\Repository;

use FishAndPlaces\Domain\Fish\Model\Fish;

interface FishRepository
{
    /**
     * @return Fish[]
     */
    public function findAll();

    /**
     * @param $id
     * @return Fish
     */
    public function find($id);

    /**
     * @param Fish $fishImage
     */
    public function update(Fish $fishImage);

    /**
     * @param Fish $fishImage
     */
    public function remove(Fish $fishImage);

    /**
     * @param Fish $fishImage
     */
    public function add(Fish $fishImage);
}
