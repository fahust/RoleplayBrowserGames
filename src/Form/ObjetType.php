<?php

namespace App\Form;

use App\Entity\Objet;
use Symfony\Component\Form\AbstractType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ObjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class , [
                'attr' => array('style' => 'font-size: 1.2em'),
                'label' => 'Object name',
                'attr' => array('style' => 'width: 200px')
            ])
            //->add('image')
            ->add('description', TextType::class , [
                'attr' => array('style' => 'font-size: 1.2em'),
                'label' => 'Object description',
                'attr' => array('style' => 'height: 100px')
            ])
            ->add('imageFile', VichFileType::class, [
                'attr' => array('style' => 'font-size: 1.2em'),
                'label' => 'Object image',
                'download_link'     => false,
                'required'          => false,
                'delete_label'          => false,
                'allow_delete' => false,
                'download_label' => false,
                'download_uri' => false,
                //'image_uri' => false,
                  
                'constraints' => [
                    new Image([
                         'mimeTypesMessage' => 'Please upload a valid Png/jpeg/jpg or Csv/xml',
                        'mimeTypes' => ['image/jpg', 'image/jpeg', 'image/png', ]
                    ])
                ],
            ])
            ->add('language', ChoiceType::class, [
                'attr' => array('style' => 'font-size: 1.2em'),
                'choices' => [
                        '' => null,
                        'French' => 'french',
                        'English' => 'english',
                        'Spanish' => 'spanish',
                        'Italia' => 'italia',
                        'Deutsch' => 'deutsch',
                ],
                    'required' => false,
                ])
            ->add('type', ChoiceType::class, [
                'attr' => array('style' => 'font-size: 1.2em'),
                'choices' => [
                        '' => null,
                        'Fantasy' => 'Fantasy',
                        'Dark' => 'Dark',
                        'Sf' => 'Sf',
                        'Medieval' => 'Medieval',
                        'Modern' => 'Modern',
                ],
                    'required' => false,
                ])
            ->add('save', SubmitType::class, [
                'attr' => array('style' => 'font-size: 1.2em'),
                'label' => 'save'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Objet::class,
        ]);
    }
}
