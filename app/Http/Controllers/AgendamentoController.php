<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    
    private $menu = 4;
    
    public function cadastrar(){
        $agendamentos = Agendamento::where('id', '<', 3)->get();
        return view('agendamentos.cadastrar_agendamento', ['agendamentos' => $agendamentos, 'menu' => 4] );
    }
    
    public function novo_agendamento(Request $request){       
        
        $request->validate([
            'titulo' => 'required',
            'tp_compromisso' => 'required',
            'dt_inicio' => 'required',
            'dt_termino' => 'required',
            'responsavel' => 'required',
            'cliente' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!',
        ], [
            'titulo'      => 'Título',
            'tp_compromisso'     => 'Tipo de Compromisso',
            'dt_inicio'  => 'Data de Início',
            'dt_termino' => 'Data de Término',
            'responsavel' => 'Responsável',
            'cliente' => 'Cliente'
            ]);
            
            $dados = $request->all();
            $dados['dt_inicio'] =  date('Y-m-d', strtotime(str_replace('/','-',$dados['dt_inicio'])));
            $dados['dt_termino'] =  date('Y-m-d', strtotime(str_replace('/','-',$dados['dt_termino'])));
            
            $agendamento = new Agendamento;
            $agendamento->titulo = $request->titulo;
            $agendamento->tp_compromisso = $request->tp_compromisso;
            $agendamento->dt_inicio = $dados['dt_inicio'];
            $agendamento->dt_termino = $dados['dt_termino'];
            $agendamento->responsavel = $request->responsavel;
            $agendamento->cliente = $request->cliente;
            
            if ($agendamento->save()) {
                return redirect()->route('agendamento.cadastrar', $this->menu)->with('save-status', 's');
            }else
            return redirect()->route('agendamento.cadastrar', $this->menu)->with('save-status', 'n');
            
            
        }
        
        public function pesquisar_agendamento(Request $request){
            $agendamentos = Agendamento::where('titulo', $request->busca_titulo)->get();
            return view('agendamentos.cadastrar_agendamento', ['agendamentos' => $agendamentos, 'menu' => 4] );
        }       
        
        public function alterar_agendamento(Request $request){
            
            $request->validate([
                'titulo_a' => 'required',
                'tp_compromisso' => 'required',
                'dt_inicio' => 'required',
                'dt_termino' => 'required',
                'responsavel' => 'required',
                'cliente' => 'required'
            ], [
                'required' => 'O campo :attribute é obrigatório!',
            ], [
                'titulo'      => 'Título',
                'tp_compromisso'     => 'Tipo de Compromisso',
                'dt_inicio'  => 'Data de Início',
                'dt_termino' => 'Data de Término',
                'responsavel' => 'Responsável',
                'cliente' => 'Cliente'
                ]);
                
                $dados = $request->all();
                $dados['dt_inicio'] =  date('Y-m-d', strtotime(str_replace('/','-',$dados['dt_inicio'])));
                $dados['dt_termino'] =  date('Y-m-d', strtotime(str_replace('/','-',$dados['dt_termino'])));
                
                if (Agendamento::where('titulo', $request->titulo_a)->update([
                    'titulo' => $request->titulo_a,
                    'tp_compromisso' => $request->tp_compromisso,
                    'dt_inicio' => $dados['dt_inicio'],
                    'dt_termino' => $dados['dt_termino'],
                    'responsavel' => $request->responsavel,
                    'cliente' => $request->cliente
                    ])) {
                        return redirect()->route('agendamento.cadastrar', $this->menu)->with('save-status-alterar', 's');
                    }else{
                        return redirect()->route('agendamento.cadastrar', $this->menu)->with('save-status', 'n');
                    }
                    
                }  
                
                
                
            }
            