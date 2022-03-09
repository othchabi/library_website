<?php

namespace App\Form\FiltreLivre;

use App\Entity\Livre;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiltreLivreDateNote extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Date1', DateType::class,['days' => range(1,31),'years'=>range(1900,2030)])
            ->add('Date2', DateType::class,['days' => range(1,31),'years'=>range(1900,2030)])
            ->add('Note1',ChoiceType::class,['choices'=>$this->getChoicesNote()])
            ->add('Note2',ChoiceType::class,['choices'=>$this->getChoicesNote()])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }

    public function getChoicesNote()
    {
  
        $i=0;

       while ($i<21){
            $output[$i]=$i;
            $i++;
        }
        return $output;
    }



}
