<?php

namespace App\Services;

class ConversorRomano
{
    // Array associativo de números romanos e seus valores equivalentes
    private $numerosRomanos = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    // Converte um número inteiro para um número romano
    public function paraRomano(int $numero): string
    {
        $resultado = '';
        foreach ($this->numerosRomanos as $romano => $valor) {
            while ($numero >= $valor) {
                $resultado .= $romano;
                $numero -= $valor;
            }
        }
        return $resultado;
    }

    // Converte um número romano para um número inteiro
    public function deRomano(string $romano): int
    {
        $resultado = 0;
        $i = 0;
        foreach ($this->numerosRomanos as $letraRomana => $valor) {
            while (substr($romano, $i, strlen($letraRomana)) === $letraRomana) {
                $resultado += $valor;
                $i += strlen($letraRomana);
            }
        }
        return $resultado;
    }
}
