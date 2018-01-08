<?php

namespace AppBundle\Domain\Fidanimo\Model;

use AppBundle\Domain\Animal\Model\Species;
use Greg0ire\Enum\AbstractEnum;

class Type extends AbstractEnum
{
    const CAT = 2;
    const DOG = 1;

    static function getAnivetoCorrespondance($type){
        switch($type){
            case self::CAT:
                return Species::CAT;

            case self::DOG:
                return Species::DOG;
        }
    }
}
