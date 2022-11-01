<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Bone;


class BoneController extends Controller
{
    public function cadastroBone()
    {

    return view('cadastrarBone');
    }

    public function listaBone()
    {

    return view('listaBone');
    }

    public function SalvarBancoBone(Request $request){

        $dadosBone = $request->validate([
            'modelo' => 'string|required',
            'tamanho' => 'string|required',
            'marca' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
    
        ]);
    
        Bone::create($dadosBone);
    
        return Redirect::route('editar-bone');
    
    
        }

        public function AlterarBancoBone(Bone $registroBone, Request $request){

            $banco = $request->validate([
            'modelo' => 'string|required',
            'tamanho' => 'string|required',
            'marca' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
    
            ]);
    
            $registroBone->fill($banco);
            $registroBone->save();
    
            
    
            return Redirect::route('editar-bone');
}

    public function MostrarBone(){
        $dadosBone = Bone::all();
        return view('editarBone',['registroBone' => $dadosBone]);
        
    }

    public function MostrarAlterarBone(Bone $registroBone){

        return view('alterarBone', ['registroBone' => $registroBone]);
    }

    public function apagarBone(Bone $registroBone){
        
        
        $registroBone->delete();


        return Redirect::route('editar-bone');
    }
}