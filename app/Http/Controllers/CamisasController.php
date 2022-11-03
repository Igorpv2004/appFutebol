<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Camisas;

class CamisasController extends Controller
{
    public function cadastroCamisa()
    {

    return view('cadastrarCamisa');
    }

    public function listaCamisa()
    {

    return view('listaCamisa');
    }

    public function SalvarBancoCamisa(Request $request){

        $dadosCamisa = $request->validate([
            'modelo' => 'string|required',
            'tamanho' => 'string|required',
            'marca' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
    
        ]);
    
        Camisas::create($dadosCamisa);
    
        return Redirect::route('editar-camisa');
    
    
        }

        public function MostrarEditarCamisa(Request $request){
            
            $dadosCamisa = Camisas::query();
            $dadosCamisa->when($request->marca,function($query, $v1){
                $query->where('marca','like','%'.$v1.'%');
            });
    
            $dadosCamisa = $dadosCamisa->get();
            
           return view('editarCamisa',['registroCamisa' => $dadosCamisa]);
}
    public function apagarCamisa(Camisas $registroCamisa){

        
        $registroCamisa->delete();


        return Redirect::route('editar-camisa');
    }

    public function MostrarAlterarCamisas(Camisas $registroCamisa){

        return view('alterarCamisa', ['registroCamisa' => $registroCamisa]);
    }

    public function AlterarBancoCamisa(Camisas $registroCamisa, Request $request){

        $banco = $request->validate([
        'modelo' => 'string|required',
        'tamanho' => 'string|required',
        'marca' => 'string|required',
        'cor' => 'string|required',
        'valor' => 'string|required'

        ]);

        $registroCamisa->fill($banco);
        $registroCamisa->save();

        

        return Redirect::route('editar-camisa');

}

public function apagarCamisas(Camisas $registroCamisa){
        
    $registroCamisa->delete();


    return Redirect::route('editar-camisa');

}
/*
    public function MostrarCamisas(){
        //dd($dadosCaminhao);
        $dadosCamisa = Camisas::all();
        //dd($dadosCaminhao);
        return view('editarCamisa',['registroCamisa' => $dadosCamisa]);
        
    }
*/
}








   