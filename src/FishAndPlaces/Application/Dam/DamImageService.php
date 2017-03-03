<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/21/16
 * Time: 7:58 PM
 */

namespace FishAndPlaces\Application\Dam;

use FishAndPlaces\Application\CommonCommand;
use FishAndPlaces\Domain\Dam\Repository\DamImageRepository;
use FishAndPlaces\Domain\Dam\Model\DamImage;

class DamImageService implements CommonService
{
    /**
     * @var DamImageRepository
     */
    private $damImageRepository;

    /** @var DamImageCommand */
    private $command;

    /**
     * @param DamImageRepository $damImageRepository
     */
    public function __construct(DamImageRepository $damImageRepository)
    {
        $this->damImageRepository = $damImageRepository;
    }

    /**
     * @param CommonCommand $command
     */
    public function create(CommonCommand $command)
    {
        $dam = $this->initDamImage($command);
        $this->damImageRepository->add($dam);
    }

    /**
     * @param CommonCommand $command
     *
     * @return void
     */
    public function delete(CommonCommand $command)
    {
        $dam = $this->initDamImage($command);
        $this->damImageRepository->remove($dam);
    }

    /**
     * @param CommonCommand $command
     *
     * @return void
     */
    public function update(CommonCommand $command)
    {
        $damImage = $this->initDamImage($command);
        $this->damImageRepository->update($damImage);
    }

    /**
     * @param CommonCommand|DamImageCommand $command
     *
     * @return DamImage
     * @throws \Exception
     */
    public function initDamImage(CommonCommand $command)
    {
        if(!$command instanceof DamImageCommand) {
            throw new \Exception(sprintf('Wrong command type, should be %s', DamImageCommand::class));
        }
        $damImage = new DamImage(
            $this->command->getDam(),
            $this->command->getImageSrc()
        );

        return $damImage;
    }
}
