<?php

namespace AppBundle\Domain\Devis\Model;

use Greg0ire\Enum\AbstractEnum;

class Status extends AbstractEnum
{
    // L'utilisateur a seulement saisi son email
    const JUST_EMAIL = 0;

    // L'utilisateur a seulement renseigné son compte utilisateur
    const JUST_USER = 1;

    // L'utilisateur est allé au bout du formulaire et le formulaire est parti chez FIDANIMO
    const SEND = 2;

    // Fidanimo nous a renvoyé l'ID du devis de leur base. Nous l'avons saisi dans eid de Devis
    const LINKED = 3;

    // Le devis est en cours de traitement chez fidanimo
    const WAITING = 4;

    // Le retour du devis est négatif
    const NEGATIV = 5;

    // le retour du devis est positif
    const POSITIV = 6;
}
