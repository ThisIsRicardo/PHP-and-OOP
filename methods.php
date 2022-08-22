<?php

class MathMethods
{
    // Property Declaration
    public $number1;
    public $number2;

    // Method Declaration

    public function sum($number1, $number2)
    {
        $result = $number1 + $number2;
        echo '<br>', '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
        La suma es: ', $result, 
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
    }

    public function substraction($number1, $number2)
    {
        $result = $number1 - $number2;
        echo '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
        La resta es: ', $result, 
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
    }


    public function multiplication($number1, $number2)
    {
        $result = $number1 * $number2;
        echo '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
        La multiplicación es: ', $result, 
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
    }

    public function division($number1, $number2)
    {
        $result = $number1 / $number2;
        echo '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
        La división es: ', round($result, 2), 
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
    }


    public function remainder($number1, $number2)
    {
        $result = $number1 % $number2;
        echo '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
        El resto de la división es: ', sprintf("%0.2f", $result), 
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
    }


    public function factorial($number1) {

        $factorial = 1;



        if ($number1 == 0) {

            echo '<br>', '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
            El factorial del número ', $number1, ' es: ', $factorial, 
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';

        } else {

        for ($i = 1; $i <= $number1; $i++) {

            $factorial = $factorial * $i;
        }

        echo '<br>', '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
        El factorial del número ', $number1, ' es: ', $factorial, 
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
    }
    
}

    public function primeNumber($number1) {

        if ($number1 == 1) {
            echo '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
            El número ', $number1, ' no es primo.', 
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
            return;
        } else {

        } if ($number1 % 2 != 0 || $number1 == 2) {
            echo '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
            El número ', $number1, ' es primo.', 
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
        } else {
            echo '<div class="alert alert-success col-4 mx-auto lead text-center alert-dismissible fade show" role="alert">
            El número ', $number1, ' no es primo.', 
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>';
        }
    }




}




?>