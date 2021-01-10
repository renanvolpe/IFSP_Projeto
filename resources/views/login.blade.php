<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

<body class="bcolor" id="bodycor" id="bodylogin">

<div class="container" >

    <div class="row">
        <div class="col-md-12 col-md-offset-5">
        <img id="imglogin" class="img" src="{{ URL::to('/assets/logo.png') }}" />
        </div>
      
            <div class="col-md-8 col-md-offset-2" id="painel-app">
               <!-- <div class="panel-heading" id="topo"><h3 class="titulo" id="tituloform">Entre com sua conta</h3></div>-->
               <div class="panel-heading" id="formletra">
               <div class="panel-body">
                    <form class="form-horizontal" id="" id="row" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Digite seu email" maxlength="120"  value="{{ old('email') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control" name="password" required  placeholder="Digite sua senha" maxlength="120">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

           
                        <div class="form-group">
                             <!--<div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Manter-se conectado
                                    </label>
                                </div>
                            </div>-->
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="botao">
                                    Login
                                </button>
                                
                                <INPUT type="reset"  name="b2" value="Limpar" id="limpar" type="button" class="col-md-offset-1 btn btn-xs btn-danger">
                                <a class="btn btn-link" href="{{ url('/passwords/reset') }}"  style="background-color:white">
                                Esqueceu a senha?

                                </a>
                            </div>
                        </div>
                       
                    </form>

                 </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>