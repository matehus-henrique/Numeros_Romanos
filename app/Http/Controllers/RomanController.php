<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ConversorRomano;

class RomanController extends Controller
{
    protected $conversor;

    public function __construct(ConversorRomano $conversor)
    {
        $this->conversor = $conversor;
    }

    
    public function showConvertToRoman()
    {
        return view('converter_para_romano'); 
    }

    
    public function showConvertFromRoman()
    {
        return view('converter_de_romano');
    }

   
    public function convertToRoman(Request $request)
    {
        $numero = $request->input('numero');
        $romano = $this->conversor->paraRomano($numero);
        return redirect()->route('converter_para_romano')->with('romano', $romano);
    }

  
    public function convertFromRoman(Request $request)
    {
        $romano = $request->input('romano');
        $numero = $this->conversor->deRomano($romano);
        return redirect()->route('converter_de_romano')->with('numero', $numero);
    }
}
