<?php

namespace ARPCCoreBundle\Form;

use ARPCCoreBundle\Form\AdressType;
use ARPCCoreBundle\Form\ContactWayType;
use ARPCCoreBundle\Entity\Club;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('surname', TextType::class)
            ->add('ffeCode', TextType::class)
            ->add('fideCode', TextType::class)
            ->add('birthday', DateType::class)
            ->add('adress', AdressType::class)
            ->add('contactWays', CollectionType::class
                               , array('entry_type' => ContactWayType::class,
                                     'allow_add'    => true,
                                     'allow_delete' => true))
            ->add('club', EntityType::class
                        , array('class' => Club::class,
                         'choice_label' => 'label'))
            ->add('save', SubmitType::class);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ARPCCoreBundle\Entity\Player'
        ));
    }
}
