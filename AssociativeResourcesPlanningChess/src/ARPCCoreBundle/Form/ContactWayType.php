<?php

namespace ARPCCoreBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactWayType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, array('choices'  => array(
                'Mail' => \ARPCCoreBundle\Entity\ContactWay::MAIL,
                'Phone' => \ARPCCoreBundle\Entity\ContactWay::PHONE,
                'Facebook' => \ARPCCoreBundle\Entity\ContactWay::FACEBOOK)))
            ->add('label', TextType::class)
            ->add('save', SubmitType::class);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ARPCCoreBundle\Entity\ContactWay'
        ));
    }
}
