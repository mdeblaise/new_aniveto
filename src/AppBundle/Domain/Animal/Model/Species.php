<?php

namespace AppBundle\Domain\Animal\Model;

use AppBundle\Domain\Fidanimo\Model\Type;
use Greg0ire\Enum\AbstractEnum;

class Species extends AbstractEnum
{
    const CAT = 1;
    const DOG = 2;
    const RABBIT = 6;
    const TORTOISE = 9;
    const FERRET = 12;
    const RODENT = 13;
    const PARROT = 16;
    const BIRD_CAGE = 18;
    const AQUARIUM = 19;

    public static function hasRelatedBreeds($species)
    {
        if (is_numeric($species)) {
            if (!Species::isValidValue((int) $species)) {
                return false;
            }

            $key = Species::getKeysFromValue((int) $species);
            if (!$key || is_array($key)) {
                return false;
            }

            $value = (int) $species;
        } else {
            if (!Species::isValidName(strtoupper($species))) {
                return false;
            }

            $value = constant(Species::class.'::'.strtoupper($species));
        }

        // Only cat and dog has breeds
        if (!in_array($value, [static::CAT, static::DOG])) {
            return false;
        }

        return true;
    }



    /**
     * Returns keys from a value.
     *
     * @param mixed $value
     *
     * @return string|string[]
     */
    public static function getKeysFromValue($value)
    {
        $keys = [];

        foreach (static::getConstants() as $key => $item) {
            if ($value === $item) {
                $keys[] = $key;
            }
        }

        return count($keys) === 1 ? current($keys) : $keys;
    }

    static function getFidAnimoCorrespondance($specie){
        switch($specie){
            case self::CAT:
                return Type::CAT;

            case self::DOG:
                return Type::DOG;
        }
    }
}
