@extends('template')

@section('contd_principal')

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
@endpush

<div id="page-wrapper">
    
    <div class="row">
        <div class="col-lg-12">
            
            
            @if (session('save-status') == "n" )
            <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Algo deu errado!</strong> Favor verificar e tentar novamente.
            </div>
            @endif
            @if (session('save-status') == "s")
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Usuário cadastrado!</strong> Você cadastrou um novo usuário com sucesso.
            </div>
            @endif

            @if (session('save-status-cliente') == "n" )
            <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Algo deu errado!</strong> Favor verificar e tentar novamente.
            </div>
            @endif
            @if (session('save-status-cliente') == "s")
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Cliente cadastrado!</strong> Você cadastrou um novo cliente com sucesso.
            </div>
            @endif
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro(s):</strong>
                @foreach ($errors->all() as $e)
                <p>{{$e}}</p>
                @endforeach
            </div>@endif
            
            
            
            <div class="col-lg-12">
                <h1 id="container">Gerenciamento de Cadastros</h1>
                <div class="bs-example">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#usuario" data-toggle="tab">Usuário</a></li>
                        <li><a href="#cliente" data-toggle="tab">Cliente</a></li>
                    </ul>
                    
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="usuario">
                            
                            <div class="page-header">
                                <h2 id="nav-tabs">Cadastro de Usuário</h2>
                            </div>
                            
                            <form action="{{route('usuario.novo')}}" method="post">
                                @csrf
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Nome completo:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="nome">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Apelido:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="apelido">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Senha:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Digite aqui!" name="senha">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Confirmar Senha:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Digite aqui!" name="senha2">
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Função/Cargo:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="fun_cargo">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>CPF:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="cpf">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="email">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Celular:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="celular">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-6">
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-info">
                                            Cadastrar
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                        
                        <div class="tab-pane fade" id="cliente">
                            <div class="page-header">
                                <h2 id="nav-tabs">Cadastro de Cliente</h2>
                            </div>
                            
                            <form action="{{route('cliente.novo')}}" method="post">
                                    @csrf

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Nome completo:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="nome">
                                </div>
                            </div>
                            
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Naturalidade:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="naturalidade">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>CPF:</label>
                                    <input type="text" class="form-control" placeholder="Digite aqui!" name="cpf">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>RG:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="rg">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Data de Nascimento:</label>
                                        <input name="dt_nascimento" type="text" class="form-control" id="data" placeholder="Digite aqui!">
                                    </div>
                                </div>
                            
                            
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Orgão Expedidor:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="org_expedidor">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="email">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Telefone fixo:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="num_fixo">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Telefone celular:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="num_cel">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label>Sexo:</label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex" value="male" checked>
                                    Homem
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="Radio1" value="female">
                                    Mulher
                                </label>
                            </div>  
                            
                            <div class="row">
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>CEP:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="cep">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Logradouro:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="logradouro">
                                </div>
                            </div>
                            
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Número da Casa:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="num_casa">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Bairro:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="bairro">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Cidade:</label>
                                    <input class="form-control" placeholder="Digite aqui!" name="cidade">
                                </div>
                            </div>
                            

                            <div class="row">
                                    <div class="col-lg-6">
                                            <label>Causa</label>
                                            <textarea class="form-control" rows=3" name="causa" placeholder="Digite aqui!"></textarea>
                                        </div>
                            </div>
                            
                            
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-3">
                                </div>
                            <div class="col-lg-2">
                                <div class="col-md-10">
                                    <br> <br> <br>
                                    <button type="submit" class="btn btn-info">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </div>
</div>

@endsection