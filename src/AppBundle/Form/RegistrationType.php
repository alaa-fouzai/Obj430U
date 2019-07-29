<?php
/**
 * Created by PhpStorm.
 * User: USER-PC
 * Date: 29/07/2019
 * Time: 16:23
 */

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Location', ChoiceType::class, [
            'choices'  => [
                'Ben Arouse' => 'Ben Arouse ',
                'Tunis' => 'Tunis ' ,
                'Beja' => 'Beja ' ,
            ],
        ]);
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getLocation()
    {
        return $this->getBlockPrefix();
    }
}