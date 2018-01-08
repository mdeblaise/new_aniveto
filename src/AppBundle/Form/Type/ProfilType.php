<?php

namespace AppBundle\Form\Type;

use AppBundle\Domain\User\Model\Gender;
use AppBundle\Entity\User;
use Greg0ire\Enum\Bridge\Symfony\Form\Type\EnumType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', EnumType::class, [
                'class' => Gender::class,
                'required' => false,
                'placeholder' => false,
                'label' => 'profil.gender',
                'prefix_label_with_class' => true,
            ])
            ->add('lastname', TextType::class, [
                'required' => false,
                'label' => 'profil.lastname',
            ])
            ->add('firstname', TextType::class, [
                'required' => false,
                'label' => 'profil.firstname',
            ])
            ->add('dateOfBirth', DateType::class, [
                'label' => 'profil.birthday',
            ])
            ->add('phone', TextType::class, [
                'required' => false,
                'label' => 'profil.phone',
            ])
            ->add('street', TextType::class, [
                'required' => false,
                'label' => 'profil.street',
            ])
            ->add('postcode', TextType::class, [
                'required' => false,
                'label' => 'profil.postcode',
            ])
            ->add('city', TextType::class, [
                'required' => false,
                'label' => 'profil.city',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'validation_groups' => ['profil']
        ]);
    }
}
