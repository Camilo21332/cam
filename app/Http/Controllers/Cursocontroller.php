<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursocontroller extends Controller
{
    public function suma($num1)
    {
        echo "valor num1", $num1;
    }


    public function par($num1)
    {


        //Comprobamos si num es un número par o no
        if (($num1 % 2) == 0) {
            //Es un número par
            echo 'Es un número par';
        } else {
            //Es un número impar
            echo 'Es un número impar';
        }
    }

    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
            echo "el numero es primo"
        },
    
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
    
    }
    public function sumar($num1,$num2)
    {
        return view( )
    }
    
}
