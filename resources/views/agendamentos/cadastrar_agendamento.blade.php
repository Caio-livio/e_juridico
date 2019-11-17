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
                <strong>Agendamento cadastrado!</strong> Você cadastrou um novo agendamento com sucesso.
            </div>
            @endif
            
            @if (session('save-status-alterar') == "s")
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Agendamento Alterado!</strong> Você alterou o agendamento com sucesso.
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
                <h1 id="container">Agendamentos</h1>
                <div class="bs-example">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class= "active"><a href="#usuario" data-toggle="tab">Cadastrar</a></li>
                        <li><a href="#cliente" data-toggle="tab">Alterar</a></li>
                    </ul>
                    
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="usuario">
                            <div class="page-header">
                                
                                <h2 id="nav-tabs">Cadastro Agendamento</h2>
                            </div>
                            <div class="col-lg-3">
                                <form action="{{route('agendamento.novo')}}" method="post">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label>Título:</label>
                                        <input name="titulo" class="form-control" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Tipo de Compromisso:</label>
                                        <input name="tp_compromisso" class="form-control" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Data de Início:</label>
                                        <input name="dt_inicio" type="text" class="form-control" id="data" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Data de Término:</label>
                                        <input name="dt_termino" type="text" class="form-control" id="data2" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Responsável:</label>
                                        <input name="responsavel" class="form-control" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Cliente:</label>
                                        <input name="cliente" class="form-control" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                
                                
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-info">
                                            Cadastrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        <div class="tab-pane fade" id="cliente">
                            
                            <div class="col-lg-12">
                                
                                <h5>Pesquisar agendamento por título:</h5>
                                
                                <form class="navbar-search" action="{{route('agendamento.pesquisa')}}" method="get">
                                    
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Procurar.." class="form-control" name="busca_titulo" >   
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
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Tipo de Compromisso</th>
                                            <th scope="col">Data de Início</th>
                                            <th scope="col">Data de Término</th>
                                            <th scope="col">Responsável</th>
                                            <th scope="col">Cliente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        @foreach ($agendamentos as $agendamento)
                                        <tr>
                                            <th scope="row">{{$agendamento['id']}}</th>
                                            <td>{{$agendamento['titulo']}}</td>
                                            <td>{{$agendamento['tp_compromisso']}}</td>
                                            <td>{{$agendamento['dt_inicio']}}</td>
                                            <td>{{$agendamento['dt_termino']}}</td>
                                            <td>{{$agendamento['responsavel']}}</td>
                                            <td>{{$agendamento['cliente']}}</td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            
                            
                            
                            
                            <form action="{{route('agendamento.alterar')}}" method="post">
                                @csrf
                                <div class="page-header">                                    
                                    <h2 id="nav-tabs">Alterar Agendamento</h2>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Título:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="titulo_a">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Tipo de Compromisso:</label>
                                        <input class="form-control" placeholder="Digite aqui!" name="tp_compromisso">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Data de Início:</label>
                                        <input name="dt_inicio" type="text" class="form-control" id="data" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Data de Término:</label>
                                        <input name="dt_termino" type="text" class="form-control" id="data2" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Responsável:</label>
                                        <input name="responsavel" class="form-control" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Cliente:</label>
                                        <input name="cliente" class="form-control" placeholder="Digite aqui!">
                                    </div>
                                </div>
                                
                                
                                
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-info">
                                            Alterar
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