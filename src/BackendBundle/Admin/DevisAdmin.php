<?php

namespace BackendBundle\Admin;

use AppBundle\Domain\Animal\Model\Species;
use AppBundle\Domain\Breed\Model\Breed;
use AppBundle\Domain\Devis\Model\Status;
use Greg0ire\Enum\Bridge\Symfony\Form\Type\EnumType;
use Knp\Menu\ItemInterface as MenuItemInterface;
use MMC\SonataAdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class DevisAdmin extends BaseAdmin
{
    protected $baseRouteName = 'admin_devis';
    protected $baseRoutePattern = 'devis';
    protected $translationDomain = 'DevisAdmin';
    protected $datagridValues = [
        '_sort_order' => 'DESC',
        '_sort_by' => 'createdAt',
    ];

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clearExcept(['export', 'list', 'show', 'edit']);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('createdAt', 'doctrine_orm_date_range', ['field_type' => 'sonata_type_date_range_picker'])
            ->add('animal.species', null, [], EnumType::class, [
                'class' => Species::class,
                'prefix_label_with_class' => true,
            ])
            ->add('status', null, [], EnumType::class, [
                'class' => Status::class,
                'prefix_label_with_class' => true,
            ])
            ->add('user.phone')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('user.gender')
            ->add('user.lastname')
            ->add('user.firstname')
            ->add('user.email')
            ->add('user.phone')
            ->add('animal.species', null, [
                'class' => Species::class,
                'template' => 'BackendBundle:Enum:list_enum.html.twig',
            ])
            ->add('animal.name')
            ->add('status', null, [
                'class' => Status::class,
                'template' => 'BackendBundle:Enum:list_status_enum.html.twig',
            ])
            ->add('createdAt', 'datetime', [
                'format' => 'd/m/Y H:i',
            ])
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                ],
            ])
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Devis')
                ->add('status', null, [
                    'class' => Status::class,
                    'template' => 'BackendBundle:Enum:show_status_enum.html.twig',
                ])
                ->add('createdAt', 'datetime', [
                    'format' => 'd/m/Y H:i',
                ])
            ->end()
            ->with('Prospect', ['class' => 'col-md-6'])
                ->add('user.gender')
                ->add('user.lastname')
                ->add('user.firstname')
                ->add('user.email')
                ->add('user.phone')
                ->add('user.dateOfBirth', 'date', [
                    'format' => 'd/m/Y',
                ])
                ->add('user.street')
                ->add('user.postcode')
                ->add('user.city')
            ->end()
            ->with('Animal', ['class' => 'col-md-6'])
                ->add('animal.name')
                ->add('animal.gender')
                ->add('animal.species', null, [
                    'class' => Species::class,
                    'template' => 'BackendBundle:Enum:show_enum.html.twig',
                ])
                ->add('animal.breed', null, [
                    'class' => Breed::class,
                    'template' => 'BackendBundle:Enum:show_enum.html.twig',
                ])
                ->add('animal.dateOfBirth', 'date', [
                    'format' => 'd/m/Y',
                ])
                ->add('animal.isVaccinated')
                ->add('animal.isIdentified')
                ->add('animal.isSterilized')
            ->end()
            ->with('Administrateur')
                ->add('comment', 'html')
            ->end()
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            // ->with('Devis')
            //     ->add('status', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('createdAt', 'datetime', [
            //         'format' => 'd/m/Y H:i',
            //         'disabled' => true,
            //     ])
            // ->end()
            // ->with('Prospect', ['class' => 'col-md-6'])
            //     ->add('user.gender', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('user.lastname', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('user.firstname', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('user.email', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('user.phone', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('user.dateOfBirth', 'date', [
            //         'format' => 'd/M/y',
            //         'disabled' => true,
            //     ])
            //     ->add('user.street', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('user.postcode', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('user.city', null, [
            //         'disabled' => true,
            //     ])
            // ->end()
            // ->with('Animal', ['class' => 'col-md-6'])
            //     ->add('animal.name', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('animal.gender', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('animal.species', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('animal.breed', null, [
            //         'disabled' => true,
            //     ])
            //     ->add('animal.dateOfBirth', 'date', [
            //         'format' => 'd/M/y',
            //         'disabled' => true,
            //     ])
            //     ->add('animal.isVaccinated', 'choice', [
            //         'disabled' => true,
            //     ])
            //     ->add('animal.isIdentified', 'choice', [
            //         'disabled' => true,
            //     ])
            //     ->add('animal.isSterilized', 'choice', [
            //         'disabled' => true,
            //     ])
            // ->end()
            ->with('Administrateur')
                ->add('comment')
            ->end()
        ;
    }
}
