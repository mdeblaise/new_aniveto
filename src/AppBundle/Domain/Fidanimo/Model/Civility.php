<?php

namespace AppBundle\Domain\Fidanimo\Model;

use AppBundle\Domain\User\Model\Gender;
use Greg0ire\Enum\AbstractEnum;

class Civility extends AbstractEnum
{
    const GENDER_M = 'M';
    const GENDER_F = 'Mme';

    static function getAnivetoCorrespondance($sex){
        switch($sex){
            case self::GENDER_M:
                return Gender::GENDER_M;

            case self::GENDER_F:
                return Gender::GENDER_F;
        }
    }
}
