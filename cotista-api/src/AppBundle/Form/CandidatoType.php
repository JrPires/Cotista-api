<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 07/06/2018
 * Time: 15:23
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class CandidatoType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cpf')
            ->add('cotista')
            ->add('telefone')
            ->add('escolaridade')
            ->add('renda')
            ->add('etnia')
            ->add('raca')
            ->add('comprovacaoInstituicao')
            ->add('declaracaoRenda');
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {

    }

}