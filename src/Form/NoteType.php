<?php

namespace App\Form;

use App\Entity\Genre;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Note',ChoiceType::class,['choices'=>$this->getChoicesNote(),'data'=>1]);
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }


    public function getChoicesNote()
    {
        
        $i=1;

       while ($i<21){
            $output[$i]=$i;
            $i++;
        }
        return $output;
    }



}
