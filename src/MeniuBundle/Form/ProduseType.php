<?php

namespace MeniuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nume')
            ->add('categorie')
            ->add('descriere')
            ->add('pret1')
            ->add('pret2')
            ->add('pret3')

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MeniuBundle\Entity\Produse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'meniubundle_produse';
    }
}
