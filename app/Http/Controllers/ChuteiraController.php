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

    public function listaChuteira()
    {

    return view('listaChuteira');
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
    
        return Redirect::route('editar-chuteira');
    
    
        }
        public function AlterarBancoChuteira(Chuteira $registroChuteira, Request $request){

            $banco = $request->validate([
            'modelo' => 'string|required',
            'tamanho' => 'string|required',
            'marca' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
    
            ]);
    
            $registroChuteira->fill($banco);
            $registroChuteira->save();
    
            
    
            return Redirect::route('editar-chuteira');
    
    }
    public function MostrarEditarChuteira(Request $request){
            
        $dadosChuteira = Chuteira::query();
        $dadosChuteira->when($request->marca,function($query, $v1){
            $query->where('marca','like','%'.$v1.'%');
        });

        $dadosChuteira = $dadosChuteira->get();
        
        return view('editarChuteira',['registroChuteira' => $dadosChuteira]);
}
    public function apagarChuteira(Chuteira $registroChuteiras){
        
      
        $registroChuteiras->delete();

        
        return Redirect::route('editar-chuteira');
    }

    public function MostrarAlterarChuteira(Chuteira $registroChuteira){

        return view('alterarChuteira', ['registroChuteira' => $registroChuteira]);
    }


}
