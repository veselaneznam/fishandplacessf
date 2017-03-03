<?php
namespace FishAndPlaces\Application\Factory;

use FishAndPlaces\Domain\Dam\Model\Dam;
use FishAndPlaces\Domain\Dam\Model\DamImage;
use FishAndPlaces\Domain\Dam\Value\Location;
use FishAndPlaces\Domain\Dam\Value\Rating;

class DamStaticFactory
{
    /**
     * @return Dam
     */
    public static function createNewDam()
    {
        return new Dam(
            null,
            new Location(null, null),
            0,
            [],
            new Rating(0),
            false
        );
    }

    /**
     * @return DamImage
     */
    public static function createEmptyDamImage()
    {
        return new DamImage(self::createNewDam(), null);
    }
}
