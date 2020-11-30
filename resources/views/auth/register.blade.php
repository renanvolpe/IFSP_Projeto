

@extends('layouts.app')
@section('content')


<body class="bcolor" id="bodycor">

<div class="container"  >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="painel-app">
                
            <div class="panel-heading" id="topo"><h3 class="titulo" id="tituloform"> Realize o seu pré-cadastro</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" id="formletra" role="form" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Digite seu endereço de e-mail" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Digite sua senha" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme sua senha"required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                    <label for="seletor" class="col-md-4 control-label">Tipo de Login</label>
<div class="col-md-6">
                    <select id="tipo" name="tipo" class="select-box-customizado btn-success show-tick" data-style="btn-info" style="background-color:black !important;">
        <option>Paciente</option>
        <option>Administrador</option>
        <option>Médico</option>
        </select>
        </div>
        </div>

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


