<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/21/16
 * Time: 7:58 PM
 */

namespace FishingAndPlaces\Dam\Applicaiton\Dam;

use FishingAndPlaces\Dam\Domain\Repository\DamRepository;
use FishingAndPlaces\Domain\Dam\Model\Dam;

class DamQueryService
{
    /**
     * @var DamRepository
     */
    private $damRepository;

    /**
     * DamQueryService constructor.
     * @param DamRepository $damRepository
     */
    public function __construct(DamRepository $damRepository)
    {
        $this->damRepository = $damRepository;
    }

    /**
     * @param int $id
     * @return Dam
     */
    public function dam($id)
    {
        return $this->damRepository->find($id);
    }

    /**
     * @return Dam[]
     */
    public function damCollection()
    {
        return $this->damRepository->findAll();
    }
}