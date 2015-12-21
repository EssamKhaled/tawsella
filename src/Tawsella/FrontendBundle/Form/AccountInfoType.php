<?php

namespace Tawsella\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccountInfoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder                
            ->add('firstName') 
            ->add('lastName')
            ->add('dateOfBirth', 'text', array('required' => false))                  
            ->add('carType')
            ->add('mobile')
            ->add('facebookUrl')
            ->add('twitterUrl')
            ->add('googlePlusUrl')
            ->add('image','file', array('data_class' => null,'required'=>false))  
            ->add('music', 'choice', array(
                'choices'   => array(true => 'مسموح',false => 'ممنوع'),
                'expanded'  => true,
            ))  
            ->add('pets', 'choice', array(
                'choices'   => array(true => 'مسموح',false => 'ممنوع'),
                'expanded'  => true,
            ))  
            ->add('smoking', 'choice', array(
                'choices'   => array(true => 'مسموح',false => 'ممنوع'),
                'expanded'  => true,
            ))                  
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tawsella\CoreBundle\Entity\AccountInfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'account_info';
    }
}
