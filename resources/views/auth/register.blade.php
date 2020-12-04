

@extends('layouts.app')
@section('content')


<body class="bcolor" id="bodycor">

<div class="container">
    <div class="row">
        <div class="col-md-12>
            <div class="panel panel-default" id="painel-app">

            <div class="panel-heading" id="topo"><h3 class="titulo" id="tituloform"> Cadastro </h1></div>
            
                <div class="panel-body">
                    <form class="form-horizontal" id="formletra" role="form" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

                        <h1> Dados Pessoais: </h1>
                         
                        <hr>

                        <!-- Inicio Linha com duas labels  NOME, SOBRENOME -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-6">
                            <label for="name" class="col-md-1 control-label">Nome:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-6">
                                    <label for="name" class="col-md-2 control-label">Sobrenome</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                        </div>
                        <!-- Fim Linha com duas labels -->


                         <!-- Inicio Linha com duas labels: EMAIL , CONFIRMAR EMAIL -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-6">
                            <label for="name" class="col-md-1 control-label">Email:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-6">
                                    <label for="name" class="col-md-5">Confirmar Email:</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                        </div>
                        <!-- Fim Linha com duas labels -->

                        <!-- Inicio Linha com QUATRO labels: DDD, TELEFONE, DDD, TELEFONE SECUNDARIO -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                        <div class="col-md-2">
                            <label for="name" class="col-md-1 control-label">DDD:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="col-md-4">
                            <label for="name" class="col-md-5">Telefone: </label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                            <div class="col-md-2">
                            <label for="name" class="col-md-1 control-label">DDD:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="col-md-4">
                            <label for="name" class="col-md-6">Telefone Secundario:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            
                             </div>
                        </div>
                        <!-- Fim Linha com QUATRO labels -->


                         <!-- Inicio Linha com TRES labels: CPF, DATA NASC, TIPO SANGUINEO -->
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-4">
                            <label for="name" class="col-md-3">CPF:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-4">
                            <label for="name" class="col-md-6">Data nascimento:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-4">
                                    <label for="name" class="col-md-5">Tipo Sanguineo</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                             </div>
                             </div>
                        <!-- Fim Linha com TRES labels -->

                        
                        <!-- Inicio Linha com duas labels -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-6">
                            <label for="name" class="col-md-4">Pagamento Particular:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-6">
                                    <label for="name" class="col-md-4">Pagamento Convenio</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                        </div>
                        <!-- Fim Linha com duas labels -->


                        <!-- Inicio Linha com duas labels -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-6">
                            <label for="name" class="col-md-4">Pagamento Particular:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-6">
                                    <label for="name" class="col-md-4">Pagamento Convenio</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                        </div>
                        <!-- Fim Linha com duas labels -->



                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-6">
                            <label for="name" class="col-md-4">Senha:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-6">
                                    <label for="name" class="col-md-4">Confirmar senha:</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                        </div>

                       

                        <h1> Endereço: </h1>

                        <hr>

                         <!-- Inicio Linha com TRES labels: CPF, DATA NASC, TIPO SANGUINEO -->
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-4">
                            <label for="name" class="col-md-3">Cep:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-4">
                            <label for="name" class="col-md-6">Numero:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-4">
                                    <label for="name" class="col-md-1">Cep:</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                             </div>
                             </div>
                        <!-- Fim Linha com TRES labels -->

                       
                         <!-- Inicio Linha com TRES labels: CPF, DATA NASC, TIPO SANGUINEO -->
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-4">
                            <label for="name" class="col-md-3">Cidade:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-4">
                            <label for="name" class="col-md-6">Estado:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-4">
                                    <label for="name" class="col-md-1">Bairro:</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            
                             </div>
                             </div>
                             </div>
                        <!-- Fim Linha com TRES labels -->


           
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"id="botao" >
                                    Registrar
                                </button>
                                <INPUT type="reset"  name="b2" value="Limpar" type="button" class="col-md-offset-1 btn btn-xs btn-danger">
                            </div>
                             </div>
                    </form>

                </div>
            </div>
        </div>
        
    </div>
</div>

</body>


@endsection


