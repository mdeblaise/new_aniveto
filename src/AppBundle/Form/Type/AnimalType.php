<?php

namespace AppBundle\Form\Type;

use AppBundle\Domain\Breed\Model\Breed;
use AppBundle\Domain\Animal\Model\Gender;
use AppBundle\Domain\Animal\Model\Species;
use AppBundle\Entity\Animal;
use Greg0ire\Enum\Bridge\Symfony\Form\Type\EnumType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => false,
                'label' => 'animal.name',
            ])
            ->add('species', EnumType::class, [
                'class' => Species::class,
                'placeholder' => false,
                'label' => 'animal.species',
                'prefix_label_with_class' => true,
            ])
            ->add('gender', EnumType::class, [
                'class' => Gender::class,
                'placeholder' => false,
                'label' => 'animal.gender',
                'prefix_label_with_class' => true,
            ])
            ->add('breed', EnumType::class, [
                'class' => Breed::class,
                'placeholder' => false,
                'label' => 'animal.breed',
                'prefix_label_with_class' => true,
            ])
            ->add('dateOfBirth', BirthdayType::class, [
                'label' => 'pet.birthday',
            ])
            ->add('isVaccinated', CheckboxType::class, [
                'label' => 'animal.isVaccinated',
                'required' => false,
            ])
            ->add('isIdentified', CheckboxType::class, [
                'label' => 'animal.isIdentified',
                'required' => false,
            ])
            ->add('isSterilized', CheckboxType::class, [
                'label' => 'animal.isSterilized',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'validation_groups' => ['animal']
        ]);
    }
}
