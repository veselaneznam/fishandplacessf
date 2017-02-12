<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/21/16
 * Time: 7:49 PM
 */

namespace FishingAndPlaces\Dam\Domain\Repository;

use FishingAndPlaces\Domain\Dam\Model\Dam;

interface DamRepository
{
    /**
     * @return Dam[]
     */
    public function findAll();

    /**
     * @param $id
     * @return Dam
     */
    public function find($id);

    /**
     * @param Dam $dam
     */
    public function update(Dam $dam);

    /**
     * @param Dam $dam
     */
    public function remove(Dam $dam);

    /**
     * @param Dam $dam
     */
    public function add(Dam $dam);
}