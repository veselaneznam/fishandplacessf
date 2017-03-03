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
use FishAndPlaces\Domain\Dam\Model\Dam;
use FishAndPlaces\Domain\Dam\Repository\DamRepository;

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
     */
    public function __construct(DamRepository $damRepository)
    {
        $this->damRepository = $damRepository;
    }

    /**
     * @param CommonCommand $command
     *
     * @return void
     */
    public function create(CommonCommand $command)
    {
        $dam = $this->initDam($command);
        $this->damRepository->add($dam);
    }

    /**
     * @param CommonCommand $command
     *
     * @return void
     */
    public function delete(CommonCommand $command)
    {
        $dam = $this->initDam($command);
        $this->damRepository->remove($dam);
    }

    /**
     * @param CommonCommand $command
     *
     * @return void
     */
    public function update(CommonCommand $command)
    {
        $dam = $this->initDam($command);
        $this->damRepository->update($dam);
    }

    /**
     * @param CommonCommand $command
     *
     * @return Dam
     * @throws \Exception
     */
    public function initDam(CommonCommand $command)
    {
        if(! $command instanceof DamCommand) {
            throw new \Exception(sprintf('Wrong command type, should be %s', DamCommand::class));
        }
        $dam = new Dam(
            $this->command->getName(),
            $this->command->getLocation(),
            $this->command->getPriceProPerson(),
            $this->command->getFishCollection(),
            $this->command->getRating(),
            $this->command->isActive()
        );

        return $dam;
    }
}
