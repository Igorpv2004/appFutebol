<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Chuteira;

class ChuteiraController extends Controller
{
    public function cadastroChuteira()
    {

    return view('cadastrarChuteira');
    }

    public function SalvarBancoChuteira(Request $request){

        $dadosChuteira = $request->validate([
            'modelo' => 'string|required',
            'tamanho' => 'string|required',
            'marca' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
    
        ]);
    
        Chuteira::create($dadosChuteira);
    
        return Redirect::route('home');
    
    
        }
}
