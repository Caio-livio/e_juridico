
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/local.css')}}" />

    <script type="text/javascript" src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">E-Jurídico</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class= @if ($menu == 1) "selected" @endif><a href="{{route('home_sistema')}}"><i class="fa fa-bug"></i> Página Principal</a></li>
                    <li class= @if ($menu == 2) "selected" @endif><a href="{{route('usuario.cadastrar')}}"><i class="fa fa-tasks"></i> Cadastro de Funcionário/Cliente</a></li>
                    <li class= @if ($menu == 3) "selected" @endif><a href="{{route('processo.cadastrar')}}"><i class="fa fa-globe"></i> Gerenciador de Processos</a></li>
                    <li class= @if ($menu == 4) "selected" @endif><a href="{{route('agendamento.cadastrar')}}"><i class="fa fa-list-ol"></i> Agendamentos</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mensagens <span class="badge">0</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">0 New Messages</li>
                            <li class="divider"></li>
                            <li><a href="#">Caixa de entrada <span class="badge">0</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{session('usuario_nome')}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Configurações</a></li>
                            <li class="divider"></li>
                        <li><a href="{{route('deslogando')}}"><i class="fa fa-power-off"></i> Desconectar</a></li>

                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <form class="navbar-search">
                            <input type="text" placeholder="Procurar" class="form-control">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

    <!-- Template -->

    @yield('contd_principal')
        
    </div>
    <!-- /#wrapper -->

    @stack('script')

    <script type="text/javascript">
        $("#data, #data2").mask("00/00/0000");
        </script>

    <script type="text/javascript">
        jQuery(function ($) {
            var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
                visits = [123, 323, 443, 32],
                traffic = [
                {
                    Source: "Direct", Amount: 323, Change: 53, Percent: 23, Target: 600
                },
                {
                    Source: "Refer", Amount: 345, Change: 34, Percent: 45, Target: 567
                },
                {
                    Source: "Social", Amount: 567, Change: 67, Percent: 23, Target: 456
                },
                {
                    Source: "Search", Amount: 234, Change: 23, Percent: 56, Target: 890
                },
                {
                    Source: "Internal", Amount: 111, Change: 78, Percent: 12, Target: 345
                }];


            $("#shieldui-chart1").shieldChart({
                theme: "dark",

                primaryHeader: {
                    text: "Visitors"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "area",
                    collectionAlias: "Q Data",
                    data: performance
                }]
            });

            $("#shieldui-chart2").shieldChart({
                theme: "dark",
                primaryHeader: {
                    text: "Traffic Per week"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "pie",
                    collectionAlias: "traffic",
                    data: visits
                }]
            });

            $("#shieldui-grid1").shieldGrid({
                dataSource: {
                    data: traffic
                },
                sorting: {
                    multiple: true
                },
                rowHover: false,
                paging: false,
                columns: [
                { field: "Source", width: "170px", title: "Source" },
                { field: "Amount", title: "Amount" },                
                { field: "Percent", title: "Percent", format: "{0} %" },
                { field: "Target", title: "Target" },
                ]
            });            
        });        
    </script>
</body>
</html>
