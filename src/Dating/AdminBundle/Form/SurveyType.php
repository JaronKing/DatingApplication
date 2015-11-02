<?php

namespace Dating\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SurveyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('body')
            ->add('questions')
            ->add('createdBy')
            ->add('dateCreated')
            ->add('outcomes')
            ->add('scores')
            ->add('submittedBy')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dating\AdminBundle\Entity\Survey'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dating_adminbundle_survey';
    }
}
