<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/21/16
 * Time: 7:49 PM
 */

namespace FishAndPlaces\Domain\Dam\Repository;

use FishAndPlaces\Domain\Dam\Model\DamImage;

interface DamImageRepository
{
    /**
     * @return DamImage[]
     */
    public function findAll();

    /**
     * @param $id
     * @return DamImage
     */
    public function find($id);

    /**
     * @param DamImage $dam
     */
    public function update(DamImage $dam);

    /**
     * @param DamImage $dam
     */
    public function remove(DamImage $dam);

    /**
     * @param DamImage $dam
     */
    public function add(DamImage $dam);

    /**
     * @param int $damId
     *
     * @return mixed
     */
    public function findByDam($damId);
}
