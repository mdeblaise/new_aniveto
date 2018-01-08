<?php

namespace AppBundle\Domain\Fidanimo\Model;

use AppBundle\Domain\Animal\Model\Gender;
use Greg0ire\Enum\AbstractEnum;

class Sex extends AbstractEnum
{
    const MALE = 'male';
    const FEMALE = 'femelle';

    static function getAnivetoCorrespondance($sex){
        switch($sex){
            case self::FEMALE:
                return Gender::FEMALE;

            case self::MALE:
                return Gender::MALE;
        }
    }
}
