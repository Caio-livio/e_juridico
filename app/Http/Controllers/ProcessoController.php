<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Processo;

class ProcessoController extends Controller
{
    private $menu = 3;

    public function cadastrar(){
        $processos = Processo::where('id', '<', 4)->get();
        return view('processo.cadastrar_processo', ['processos' => $processos, 'menu' => 3] );
    }

    public function novo_processo(Request $request){

        $request->validate([
            'assunto' => 'required',
            'responsavel' => 'required',
            'justica' => 'required',
            'instacia' => 'required',
            'orgao' => 'required',
            'cnj' => 'required',
            'pessoa1' => 'required',
            'envolvimento1' => 'required',
            'pessoa2' => 'required',
            'envolvimento2' => 'required',
            'causa' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ],[
            'assunto' => 'Assunto',
            'responsavel' => 'Responsavel',
            'justica' => 'Justiça',
            'instacia' => 'Instância',
            'orgao' => 'Orgão',
            'cnj' => 'Número CNJ',
            'pessoa1' => 'Pessoa 1',
            'envolvimento1' => 'Envolvimento 1',
            'pessoa2' => 'Pessoa 2',
            'envolvimento2' => 'Envolvimento 2',
            'causa' => 'Causa'
            ]);

            $processo = new Processo;
            $processo->assunto = $request->assunto;
            $processo->responsavel = $request->responsavel;
            $processo->justica = $request->justica;
            $processo->instancia = $request->instacia;
            $processo->orgao = $request->orgao;
            $processo->cnj = $request->cnj;
            $processo->pessoa1 = $request->pessoa1;
            $processo->envolvimento1 = $request->envolvimento1;
            $processo->pessoa2 = $request->pessoa2;
            $processo->envolvimento2 = $request->envolvimento2;
            $processo->causa = $request->causa;

            if ($processo->save()) {
                return redirect()->route('processo.cadastrar', $this->menu)->with('save-status', 's');
            }else{
                return redirect()->route('processo.cadastrar', $this->menu)->with('save-status', 'n');
            }

    }

    public function pesquisa_processo(Request $request)
    {
        $processo = Processo::where('assunto', $request->busca_assunto)->get();
            return view('cadastrar_processo', ['processos' => $processos, 'menu' => 4] );
    }

    public function alterar_processo(Request $request){

        $request->validate([
            'assunto' => 'required',
            'responsavel' => 'required',
            'justica' => 'required',
            'instacia' => 'required',
            'orgao' => 'required',
            'cnj' => 'required',
            'pessoa1' => 'required',
            'envolvimento1' => 'required',
            'pessoa2' => 'required',
            'envolvimento2' => 'required',
            'causa' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ],[
            'assunto' => 'Assunto',
            'responsavel' => 'Responsavel',
            'justica' => 'Justiça',
            'instacia' => 'Instância',
            'orgao' => 'Orgão',
            'cnj' => 'Número CNJ',
            'pessoa1' => 'Pessoa 1',
            'envolvimento1' => 'Envolvimento 1',
            'pessoa2' => 'Pessoa 2',
            'envolvimento2' => 'Envolvimento 2',
            'causa' => 'Causa'
            ]);

            if(Processo::where('assunto', $request->assunto)->update([
                'assunto' => $request->assunto,
                'responsavel' => $request->responsavel,
                'justica' => $request->justica,
                'instancia' => $request->instacia,
                'orgao' => $request->orgao,
                'cnj' => $request->cnj,
                'pessoa1' => $request->pessoa1,
                'envolvimento1' => $request->envolvimento1,
                'pessoa2' => $request->pessoa2,
                'envolvimento2' => $request->envolvimento2,
                'causa' => $request->causa
                ])){
                    return redirect()->route('processo.cadastrar', $this->menu)->with('save-status-alterar', 's');
                }else{
                    return redirect()->route('processo.cadastrar', $this->menu)->with('save-status', 'n');
                }

    }


}
