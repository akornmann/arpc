<?php

namespace ARPCCoreBundle\Form;

use ARPCCoreBundle\Form\AdressType;
use ARPCCoreBundle\Form\ContactWayType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClubType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('operationalHours', TextType::class)
            ->add('handicapAcess', ChoiceType::class, array(
                'choices'  => array(
                    'Yes' => true,
                    'No' => false)))
            ->add('label', TextType::class)
            ->add('code', TextType::class)
            ->add('adress', AdressType::class)
            ->add('contactWays', CollectionType::class
                , array('entry_type' => ContactWayType::class,
                    'allow_add'    => true,
                    'allow_delete' => true))
            ->add('save', SubmitType::class);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ARPCCoreBundle\Entity\Club'
        ));
    }
}
