<?php

namespace ARPCCoreBundle\Form;

use ARPCCoreBundle\Entity\Club;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TeamEventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('host', EntityType::class
                        , array('class' => Club::class,
                         'choice_label' => 'label'))
            ->add('visitors', EntityType::class
                        , array('class' => Club::class,
                         'choice_label' => 'label'))
            ->add('field', EntityType::class
                        , array('class' => Club::class,
                         'choice_label' => 'label'))
            ->add('start', DateType::class)
            ->add('save', SubmitType::class);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ARPCCoreBundle\Entity\TeamEvent'
        ));
    }
}
