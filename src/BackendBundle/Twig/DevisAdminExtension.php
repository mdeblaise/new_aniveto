<?php

namespace BackendBundle\Twig;

use AppBundle\Domain\Devis\Model\Status;
use Symfony\Component\Translation\TranslatorInterface;

class DevisAdminExtension extends \Twig_Extension
{
    protected $translator;

    public function __construct(
        TranslatorInterface $translator
    ) {
        $this->translator = $translator;
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('enum_status', [$this, 'enumStatus']),
            new \Twig_SimpleFilter('enum_status_color', [$this, 'enumStatusColor']),
        ];
    }

    public function enumStatus($status)
    {
        if ($status != Status::SEND) {
            return $this->translator->trans('status.incomplete', [], 'DevisAdmin');
        }

        return $this->translator->trans('status.send', [], 'DevisAdmin');
    }

    public function enumStatusColor($status)
    {
        //faire un switch si plus de statuts (waiting, etc)
        if ($status != Status::SEND) {
            return 'text-danger';
        }

        return 'text-success';
    }

    public function getName()
    {
        return 'devis_admin_extension';
    }
}
