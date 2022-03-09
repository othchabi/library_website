<?php

namespace App\Validator;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class isbn extends Constraint
{
    public $message = 'L\'expression doit commencer  par 978 ou 979 et suivie de 4 groupes de chiffres séparés par des traits d union.';
    
}