<?php

namespace BackendBundle\Admin;

use MMC\SonataAdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

class BaseAdmin extends AbstractAdmin
{
    protected $translationDomain = 'SonataAdminBundle';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('batch')
            ->remove('create')
            ->remove('show')
            ->remove('delete')
            ->remove('export')
            ;
    }

    public function getBatchActions()
    {
        return [];
    }

    public function getExportFormats()
    {
        return [];
    }
}
