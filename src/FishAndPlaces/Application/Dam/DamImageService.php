<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/21/16
 * Time: 7:58 PM
 */

namespace FishingAndPlaces\Dam\Applicaiton\Dam;

use FishingAndPlaces\Dam\Applicaiton\CommonService;
use FishingAndPlaces\Dam\Domain\Repository\DamImageRepository;
use FishingAndPlaces\Domain\Dam\Model\Dam;

class DamImageService implements CommonService
{
    /**
     * @var DamImageRepository
     */
    private $damImageRepository;

    /**
     * @param DamImageRepository $damImageRepository
     */
    public function __construct(DamImageRepository $damImageRepository)
    {
        $this->damImageRepository = $damImageRepository;
    }

    /**
     * @param DamImageCommand $damImageCommand
     */
    public function create(DamImageCommand $damImageCommand)
    {
        $dam = $this->initDamImage($damImageCommand);
        $this->damImageRepository->add($dam);
    }

    /**
     * @param DamCommand $command
     * @return void
     */
    public function delete(DamImageCommand $command)
    {
        $dam = $this->initDamImage($command);
        $this->damImageRepository->remove($dam);
    }

    /**
     * @param DamCommand $command
     *
     * @return void
     */
    public function update(DamImageCommand $command)
    {
        $dam = $this->initDamImage($command);
        $this->damImageRepository->update($dam);
    }

    /**
     * @param DamImageCommand $command
     * @return DamImage
     */
    public function initDamImage(DamImageCommand $command)
    {
        $dam = new Dam(
            $command->getName(),
            $command->getLocation(),
            $command->getPrice(),
            $command->getFishCollection(),
            $command->getRating()
        );

        return $dam;
    }
}