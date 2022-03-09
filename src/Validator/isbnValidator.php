<?php
namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class isbnValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /*if (!$constraint instanceof ContainsAlphanumeric) {
            throw new UnexpectedTypeException($constraint, isbn::class);
        }*/

        // custom constraints should ignore null and empty values to allow
        // other constraints (NotBlank, NotNull, etc.) to take care of that
        if (null === $value || '' === $value) {
            return;
        }

        if (!is_string($value)) {
            // throw this exception if your validator cannot handle the passed type so that it can be marked as invalid
            throw new UnexpectedValueException($value, 'string');
        }

            // separate multiple types using pipes
            // throw new UnexpectedValueException($value, 'string|int');
            //Regex qui regarde si l'expression commence bien par 978 ou 979 puis est suivie
            //de 4 groupes de chiffres séparés par des traits d'union
                if(!preg_match('/(978|979)-[0-9]+-[0-9]+-[0-9]+-[0-9]+/', $value, $matches)) {
                // the argument must be a string or an object implementing __toString()
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ string }}', $value)
                    ->addViolation();
            }
            //on compte le nombre de chiffres dans l'expression
           
            $value=strval($value);
            preg_replace_callback('/\d/',function($m)use(&$count){
                $count++;
            },$value);
            //l'isbn doit etre composé de 13 chiffres
            if($count !=13){
                $this->context->buildViolation("le code doit etre composé de 13 chiffres organisés en 
                5 groupes séparés par des traits d'union")
                     ->addViolation();
                     return;}
            //soit X la somme des chiffres en position paire et soit Y la somme des chiffres en position
            //impaire(on considère que le chiffre le plus à droite est en position 1).3X+Y doit etre
            //divisible par 10
            
            if(!$this->isISBNValid($value)){
                $this->context->buildViolation("3X+Y n'est pas divisible par 10")
                     ->addViolation();
                     }
                     
                  
                
            
           //on compte le nombre des traits d'union dans l'expression
           $count=0;
            preg_replace_callback('/-/',function($m)use(&$count){
                $count++;
            },$value);
            //le code doit etre composé de 13 chiffres organisés en 5 groupes séparés par des traits
            //d'union (=4 traits d'unions)
            if($count!=4){
                      $this->context->buildViolation("le code doit etre composé de 13 chiffres organisés en 5 groupes séparés par des trait d'union")
                           ->addViolation();
            
        }
        }
        //retourne vrai si l'ISBN est valide, faux sinon
        private function isISBNValid($value):bool
        {
            $X=0;
            $Y=0;
            $index=1;
            $order=1;
            while(($val=substr($value,$index-1,1))!=''){
                if(preg_match('/\d/',$val,$matches)){
                    if($order==0){
                        $X+=intval($val);
                        $order=1;
                    }else if($order==1){
                        $Y+=intval($val);
                        $order=0;
                    }
                }
                $index++;
            }
            $test=((((3* $X)+ $Y) % 10));
             if($X=0 && $Y==0){
                 return false;
             }else if($test==0){
                 return true;
             }else{
                 return false;
             }
        }
    }


  

