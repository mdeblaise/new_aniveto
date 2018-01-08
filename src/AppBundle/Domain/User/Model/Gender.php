<?php

namespace AppBundle\Domain\User\Model;

use AppBundle\Domain\Fidanimo\Model\Civility;
use Greg0ire\Enum\AbstractEnum;

class Gender extends AbstractEnum
{
    const GENDER_M = 'Mr';

    const GENDER_F = 'Mme';

    public static function getGenderList()
    {
        return [
            self::GENDER_M => sprintf('gender.%s', self::GENDER_M),
            self::GENDER_F => sprintf('gender.%s', self::GENDER_F),
        ];
    }

    public static function getGenderValues()
    {
        return array_keys(static::getGenderList());
    }

    public static function getFidAnimoCorrespondance($sex)
    {
        switch ($sex) {
            case self::GENDER_F:
                return Civility::GENDER_F;

            case self::GENDER_M:
                return Civility::GENDER_M;
        }
    }
}
