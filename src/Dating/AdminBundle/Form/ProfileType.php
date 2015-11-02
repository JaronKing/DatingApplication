<?php

namespace Dating\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('birthday')
            ->add('age')
            ->add('height', 'text', array(
        'attr' => array( 'class' => 'form-control' )
            ))
            ->add('summary', 'text', array(
                'attr' => array( 'class' => 'form-control' )
            ))
            ->add('pictures', 'file', array(
                'attr' => array( 'style' => 'margin: auto; width: 200px;' ),
                'data_class' => null,
                'required' => false
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dating\AdminBundle\Entity\Profile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dating_adminbundle_profile';
    }
}
