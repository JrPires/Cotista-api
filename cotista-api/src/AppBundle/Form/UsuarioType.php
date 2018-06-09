<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 06/06/2018
 * Time: 20:25
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('email');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        /**
        $resolver->setDefaults([
            'data_class' => Usuario::class
        ]);
          */
    }

    public function getBlockPrefix()
    {

    }

}