<?php

namespace AppBundle\Domain\Animal\Model;

use AppBundle\Domain\Fidanimo\Model\Sex;
use Greg0ire\Enum\AbstractEnum;

class Gender extends AbstractEnum
{
    const MALE = 'male';
    const FEMALE = 'female';

    static function getFidAnimoCorrespondance($sex){
        switch($sex){
            case self::FEMALE:
                return Sex::FEMALE;

            case self::MALE:
                return Sex::MALE;
        }
    }
}
