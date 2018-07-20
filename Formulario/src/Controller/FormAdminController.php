<?php
/**
 * Created by PhpStorm.
 * User: Isabel Silva
 * Date: 20/07/2018
 * Time: 18:50
 */

namespace App\Controller;

use App\Entity\Dados;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormAdminController extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name',TextType::class)
            ->add('nickname',TextType::class)
            ->add('preferential_address',TextType::class)
            ->add('country',TextType::class)
            ->add('city',TextType::class)
            ->add('street',TextType::class)
            ->add('email',EmailType::class)
            ->add('phone_number',IntegerType::class)
            ->add('phone_number2',IntegerType::class)
            ->add('date_of_birth', DateType::class)
            ->add('password',PasswordType::class)
            ->add('driving_license_number',IntegerType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'clientes' => Dados::class,
        ));
    }

}