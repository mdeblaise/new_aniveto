<?php

namespace AppBundle\Domain\Util;

/**
 * Created by PhpStorm.
 * User: fenow
 * Date: 20/12/2017
 * Time: 11:57
 */
class Date
{
    static function transformDate($dateTime, $format = 'd-m-Y') {
        $date = new \DateTime($dateTime);
        return $date->format($format);
    }
}