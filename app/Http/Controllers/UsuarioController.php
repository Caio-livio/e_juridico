<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Endereco;

class UsuarioController extends Controller
{
    private $menu = 2;
    
    public function cadastrar(){
        return view('funcionario_cliente.cadastrar_fun_clin', $menu = ['menu' => 2]);
    }
    
    public function novo_usuario(Request $request){
        
        $request->validate([
            'nome' => 'required',
            'apelido' => 'required',
            'senha' => 'same:senha2|required',
            'senha2' => 'required',
            'fun_cargo' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'celular' => 'required'
        ], [
            'same' => 'Os campos de senha tem que serem iguais!',
            'required' => 'O campo :attribute é obrigatório!',
        ],[
            'senha'      => 'Senha',
            'senha2'     => 'Confirmar Senha',
            'apelido'  => 'Apelido',
            'cpf' => 'CPF',
            'nome' => 'Nome',
            'fun_cargo' => 'Função/Cargo',
            'email' => 'E-mail',
            'celular' => 'Celular',
            ]);
            
            $usuario = new Usuario;
            $usuario->nome = $request->nome;
            $usuario->apelido = $request->apelido;
            $usuario->cargo = $request->fun_cargo;
            $usuario->cpf = $request->cpf;
            $usuario->senha = $request->senha;
            $usuario->email = $request->email;
            $usuario->num_cel = $request->celular;
            
            if ($usuario->save()) {
                return redirect()->route('usuario.cadastrar', $this->menu)->with('save-status', 's');
            }else{
                return redirect()->route('usuario.cadastrar', $this->menu)->with('save-status', 'n');
            }
            
            
        }
        
        public function novo_cliente(Request $request)
        {
            $request->validate([
                'nome' => 'required',
                'naturalidade' => 'required',
                'cpf' => 'required',
                'rg' => 'required',
                'dt_nascimento' => 'required',
                'org_expedidor' => 'required',
                'email' => 'required',
                'num_fixo' => 'required',
                'num_cel' => 'required',
                'cep' => 'required',
                'logradouro' => 'required',
                'num_casa' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'causa' => 'required'
            ], [
                'required' => 'O campo :attribute é obrigatório!',
            ],[
                'naturalidade' => 'Naturalidade',
                'rg'     => 'RG',
                'dt_nascimento'  => 'Data de Nascimento',
                'cpf' => 'CPF',
                'nome' => 'Nome',
                'org_expedidor' => 'Orgão Expedidor',
                'email' => 'E-mail',
                'num_cel' => 'Telefone Celular',
                'num_fixo' => 'Telefone Fixo',
                'cep' => 'CEP',
                'logradouro' => 'Logradouro',
                'num_casa' => 'Número da Casa',
                'bairro' => 'Bairro',
                'cidade' => 'Cidade',
                'causa' => 'Causa'
                ]);
                
                $dados = $request->all();
                $dados['dt_nascimento'] =  date('Y-m-d', strtotime(str_replace('/','-',$dados['dt_nascimento'])));
                
                $cliente = new Cliente;
                $cliente->nome = $request->nome;
                $cliente->naturalidade = $request->naturalidade;
                $cliente->rg = $request->rg;
                $cliente->dt_nasc = $dados['dt_nascimento'];
                $cliente->cpf = $request->cpf;
                $cliente->org_expedidor = $request->org_expedidor;
                $cliente->email = $request->email;
                $cliente->num_cel = $request->num_cel;
                $cliente->num_fixo = $request->num_fixo;
                $cliente->causa = $request->causa;
                
                if ($cliente->save()) {
                    $dados = Cliente::where('cpf', $request->cpf)->first();
                    
                    $endereco = new Endereco;
                    $endereco->cliente_id = $dados['id'];
                    $endereco->logradouro = $request->logradouro;
                    $endereco->num_casa = $request->num_casa;
                    $endereco->bairro = $request->bairro;
                    $endereco->cidade = $request->cidade;
                    $endereco->cep = $request->cep;
                    
                    if ($endereco->save()) {
                        return redirect()->route('usuario.cadastrar', $this->menu)->with('save-status-cliente', 's');
                    }else{
                        return redirect()->route('usuario.cadastrar', $this->menu)->with('save-status-cliente', 'n');
                    }
                    
                }else{
                    return redirect()->route('usuario.cadastrar', $this->menu)->with('save-status-cliente', 'n');
                }
                
                
                
                
            }
            
        }
        