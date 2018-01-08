<?php

namespace AppBundle\Domain\User\Model;

use Greg0ire\Enum\AbstractEnum;

class Status extends AbstractEnum
{
    // L'utilisateur a seulement saisi son email
    const JUST_EMAIL = 0;

    // L'utilisateur a seulement renseigné son compte utilisateur
    const JUST_USER = 1;
}
