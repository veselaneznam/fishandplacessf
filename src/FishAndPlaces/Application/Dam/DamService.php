<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/21/16
 * Time: 7:58 PM
 */

namespace FishingAndPlaces\Dam\Applicaiton\Dam;

use FishingAndPlaces\Dam\Application\CommonService;
use FishingAndPlaces\Dam\Domain\Repository\DamRepository;
use FishingAndPlaces\Domain\Dam\Model\Dam;

class DamService implements CommonService
{
    /**
     * @var DamRepository
     */
    private $damRepository;

    /**
     * @var DamCommand
     */
    private $command;

    /**
     * DamService constructor.
     *
     * @param DamRepository $damRepository
     * @param DamCommand    $command
     */
    public function __construct(DamRepository $damRepository, DamCommand $command)
    {
        $this->damRepository = $damRepository;

        $this->command = $command;
    }

    /**
     * @return void
     */
    public function create()
    {
        $dam = $this->initDam();
        $this->damRepository->add($dam);
    }

    /**
     * @return void
     */
    public function delete()
    {
        $dam = $this->initDam();
        $this->damRepository->remove($dam);
    }

    /**
     * @return void
     */
    public function update()
    {
        $dam = $this->initDam();
        $this->damRepository->update($dam);
    }

    /**
     * @return Dam
     */
    public function initDam()
    {
        $dam = new Dam(
            $this->command->getName(),
            $this->command->getLocation(),
            $this->command->getPrice(),
            $this->command->getFishCollection(),
            $this->command->getRating()
        );

        return $dam;
    }
}