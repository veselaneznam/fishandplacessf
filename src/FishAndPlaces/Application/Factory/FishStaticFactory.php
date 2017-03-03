<?php
namespace FishAndPlaces\Application\Factory;

use FishAndPlaces\Domain\Dam\Value\Location;
use FishAndPlaces\Domain\Fish\Model\Fish;
use FishAndPlaces\Domain\Fish\Model\FishImage;

class FishStaticFactory
{
    /**
     * @return Fish
     */
    public static function createNewFish()
    {
        return new Fish(null, new Location(null, null), DamStaticFactory::createNewDam());
    }

    /**
     * @return FishImage
     */
    public static function createEmptyFishImage()
    {
        return new FishImage(self::createNewFish(), null);
    }
}
