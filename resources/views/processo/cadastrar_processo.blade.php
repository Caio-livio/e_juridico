@extends('template')

@section('contd_principal')

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
                <strong>Cliente cadastrado!</strong> Você cadastrou um novo cliente com sucesso.
            </div>
            @endif

            @if (session('save-status-alterar') == "s")
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Processo alterado!</strong> Você alterou um processo com sucesso.
            </div>
            @endif
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro(s):</strong>
                @foreach ($errors->all() as $e)
                <p>{{$e}}</p>
                @endforeach
            </div>@endif
            
            <h2 id="nav-tabs">Processos</h2>
            <div class="bs-example">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#cadastrar" data-toggle="tab">Cadastrar</a></li>
                    <li><a href="#alterar" data-toggle="tab">Alterar</a></li>
                </ul>
                
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="cadastrar">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1 id="container">Cadastrar Processos</h1>
                            </div>
                            
                            <form action="{{route('processo.novo')}}" method="post">
                                @csrf
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Assunto:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="assunto">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Responsável:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="responsavel">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Justiça:</label>
                                        <input type="text" class="form-control" id="password" placeholder="Digite aqui!" name="justica">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Instância:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="instacia">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Orgão:</label>
                                        <input type="text" class="form-control" id="password" placeholder="Digite aqui!" name="orgao">
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Número CNJ:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="cnj">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Pessoa 1:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="pessoa1">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Envolvimento 1:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="envolvimento1">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Pessoa 2:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="pessoa2">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Envolvimento 2:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="envolvimento2">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                </div>
                                
                                <div class="col-lg-6">
                                    <label>Causa:</label>
                                    <textarea class="form-control" rows="3" name="causa"></textarea>
                                </div>
                                
                                <div class="col-lg-6">
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
                    
                    
                    <div class="tab-pane fade" id="alterar">
                        
                        <div class="col-lg-12">
                            
                            <h5>Pesquisar processo por assunto:</h5>
                            
                            <form class="navbar-search" action="{{route('processo.pesquisa')}}" method="get">
                                
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Procurar.." class="form-control" name="busca_assunto" >   
                                </div>
                                
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-default">
                                        Buscar
                                    </button>
                                </div>
                                
                            </form>
                            
                            
                            <br>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Assunto</th>
                                            <th scope="col">Responsável</th>
                                            <th scope="col">Justiça</th>
                                            <th scope="col">Instância</th>
                                            <th scope="col">Orgão</th>
                                            <th scope="col">Nº CNJ</th>
                                            <th scope="col">Pessoa 1</th>
                                            <th scope="col">Envolvimento 1</th>
                                            <th scope="col">Pessoa 2</th>
                                            <th scope="col">Envolvimento 2</th>
                                            <th scope="col">Causa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        @foreach ($processos as $processo)
                                        <tr>
                                            <th scope="row">{{$processo['id']}}</th>
                                            <td>{{$processo['assunto']}}</td>
                                            <td>{{$processo['responsavel']}}</td>
                                            <td>{{$processo['justica']}}</td>
                                            <td>{{$processo['instancia']}}</td>
                                            <td>{{$processo['orgao']}}</td>
                                            <td>{{$processo['cnj']}}</td>
                                            <td>{{$processo['pessoa1']}}</td>
                                            <td>{{$processo['envolvimento1']}}</td>
                                            <td>{{$processo['pessoa2']}}</td>
                                            <td>{{$processo['envolvimento2']}}</td>
                                            <td>{{$processo['causa']}}</td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        <form action="{{route('processo.alterar')}}" method="post">
                            @csrf
                            
                            <div class="col-lg-12">
                                <div class="page-header">
                                    <h1 id="container">Alterar Processos</h1>
                                </div>
                                <h5>Pesquisar processo por assunto:</h5>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Assunto:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="assunto">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Responsável:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="responsavel">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Justiça:</label>
                                        <input type="text" class="form-control" name="justica" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Instância:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="instacia">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Orgão:</label>
                                        <input type="text" class="form-control" name="orgao" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Número CNJ:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="cnj">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Pessoa 1:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="pessoa1">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Envolvimento 1:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="envolvimento1">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Pessoa 2:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="pessoa2">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Envolvimento 2:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="envolvimento2">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                </div>
                                
                                <div class="col-lg-6">
                                    <label>Causa:</label>
                                    <textarea class="form-control" rows="3" name="causa"></textarea>
                                </div>
                                
                                <div class="col-lg-6">
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