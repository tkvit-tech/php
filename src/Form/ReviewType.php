<?php

namespace App\Form;

use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, ['label' => 'Имя'])
           // ->add('created_at')
            ->add('begin_date', null, ['label' => 'Дата заезда'])
            ->add('end_date', null, ['label' => 'Дата выезда'])
           // ->add('room')
            ->add('mark', null, ['label' => 'Оценка'])
            ->add('review', null, ['label' => 'Отзыв'])
           // ->add('hotel')
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
