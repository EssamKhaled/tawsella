<?php

namespace Tawsella\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OfferRideType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rideType', 'choice', array(
                'choices'   => array('One-time trip' => 'توصيله واحدة','Recurring trip' => 'توصيله دورية'),
                'expanded'  => true,
            ))  
            ->add('rideFrom')
            ->add('rideTo')
            ->add('stopOver')                
            ->add('departureDate')
            ->add('returnDate')
            ->add('price')                
            ->add('availableSeats')            
            ->add('womenOnly', 'checkbox', array(
                'required'  => false,
            ))
            ->add('notes') 
            ->add('xterms', 'checkbox', array(
                    'mapped' => false,
                    'empty_data' => false,
                    'required' => 'required',
                    'label' => 'label.terms',
                    'data'=>false
            ))                
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tawsella\CoreBundle\Entity\OfferRide'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'offer_ride';
    }
}
