<?php
/**
 * Created by PhpStorm.
 * User: Vesela Ferdinandova
 * Email: vesela.ferdinandova@gmail.com
 * Date: 11/22/16
 * Time: 8:14 PM
 */

namespace FishAndPlaces\Application\Dam;

use FishAndPlaces\Application\CommonCommand;

interface CommonService
{
    public function create(CommonCommand $command);

    public function delete(CommonCommand $command);

    public function update(CommonCommand $command);
}
