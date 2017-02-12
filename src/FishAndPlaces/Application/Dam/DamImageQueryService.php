<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/21/16
 * Time: 7:58 PM
 */

namespace FishingAndPlaces\Dam\Applicaiton\Dam;

use FishingAndPlaces\Dam\Domain\Repository\DamImageRepository;
use FishingAndPlaces\Domain\Dam\Model\Dam;
use FishingAndPlaces\Domain\Dam\Model\DamImage;

class DamImageQueryService
{
    /**
     * @var DamImageRepository
     */
    private $damImageRepository;

    /**
     * DamQueryService constructor.
     *
*@param DamImageRepository $damImageRepository
     */
    public function __construct(DamImageRepository $damImageRepository)
    {
        $this->damImageRepository = $damImageRepository;
    }

    /**
     * @param int $id
     * @return DamImage
     */
    public function damImage($id)
    {
        return $this->damImageRepository->find($id);
    }

    /**
     * @param Dam $dam
     *
     * @return DamImage
     */
    public function damImageByDam(Dam $dam)
    {
        return $this->damImageRepository->findByDam($dam->getId());
    }

    /**
     * @return DamImage[]
     */
    public function damImageCollection()
    {
        return $this->damImageRepository->findAll();
    }
}