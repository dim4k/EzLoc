<?php

namespace EzLoc\Bundle\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlaceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'label'  => 'Titre')
            )
            ->add('subtitle','text', array(
                'label'  => 'Sous titre')
            )
            ->add('img', 'file', array(
                'required' => false, 'label' => 'Image')
            )
            ->add('modalSubtitle', 'textarea', array (
                'required' => false, 'label' => 'Modale')
            )
            ->add('modalDescription', 'textarea', array (
                'required' => false, 'label' => 'Titre modale')
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EzLoc\Bundle\SiteBundle\Entity\Place'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ezloc_bundle_sitebundle_place';
    }
}
