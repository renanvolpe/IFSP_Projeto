

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

                        <h1 class="titulo" id="tituloform"> Dados Pessoais: </h1>

                        <hr>

                        <!-- Inicio Linha com duas labels  NOME, SOBRENOME -->
                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">


                            <div class="col-md-6">
                            <label for="nome" class="col-md-1 control-label">Nome:</label>
                                <input id="name" type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="{{ old('nome') }}" required autofocus>

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('sobrenome') ? ' has-error' : '' }}">


                                <div class="col-md-6">
                                    <label for="sobrenome" class="col-md-2 control-label">Sobrenome</label>
                                    <input id="name" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                </div>

                             </div>
                        </div>


                        <!-- Inicio Linha com QUATRO labels: DDD, TELEFONE, DDD, TELEFONE SECUNDARIO -->
                        <div class="form-group{{ $errors->has('ddd1') ? ' has-error' : '' }}">

                        <div class="col-md-2">
                            <label for="ddd1" class="col-md-2 control-label">DDD:</label>
                                <input id="name" type="number" class="form-control" name="ddd1" placeholder="Digite seu DDD" value="{{ old('ddd1') }}" required autofocus>

                                @if ($errors->has('ddd1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ddd1') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="col-md-4">
                            <label for="telefone" class="col-md-5">Telefone: </label>
                                <input id="name" type="number" class="form-control" name="telefone" placeholder="Digite seu telefone" value="{{ old('telefone') }}" required autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">

                            <div class="col-md-2">
                                <label for="ddd2" class="col-md-2 control-label">DDD:</label>
                                    <input id="name" type="number" class="form-control" name="ddd2" placeholder="Digite seu DDD" value="{{ old('ddd2') }}" required autofocus>

                                    @if ($errors->has(''))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('') }}</strong>
                                        </span>
                                    @endif

                            </div>
           <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                             <div class="col-md-4">
                            <label for="telefonesecundario" class="col-md-6">Telefone Secundario:</label>
                                <input id="name" type="number" class="form-control" name="telefonesecundario" placeholder="Digite seu telefone secundario" value="{{ old('telefonesecundario') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif

                            </div>

                             </div>
                        </div>
                        <!-- Fim Linha com QUATRO labels -->


                         <!-- Inicio Linha com TRES labels: CPF, DATA NASC, TIPO SANGUINEO -->
                         <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">


                            <div class="col-md-4">
                            <label for="cpf" class="col-md-3">CPF:</label>
                                <input id="name" type="text" class="form-control" name="cpf" placeholder="Digite seu CPF" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('datanasc') ? ' has-error' : '' }}">


                            <div class="col-md-4">
                            <label for="datanasc" class="col-md-6">Data nascimento:</label>
                                <input id="name" type="text" class="form-control" name="datanasc" placeholder="Digite sua data de nascimento" value="{{ old('datanasc') }}" required autofocus>

                                @if ($errors->has('datanasc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datanasc') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <!-- Inicio Linha com TRES labels: campo TIPO SANGUINEO será OPCIONAL
                            por iss, $errors->has('') está VAZIO-->
                            <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">


                                <div class="col-md-4">
                                    <label for="tiposanquineo" class="col-md-5">Tipo Sanguineo</label>
                                    </div>
                                    <div class="col-md-4">
                                    <select type="select" name="tiposanguineo" style="align=center"class="form-control" id="name">
                                            <option  value="Escolha">Escolha</option>
                                            <option  value="Ap">A+</option>
                                            <option  value="Am">A-</option>
                                            <option  value="Bp">B+</option>
                                            <option  value="Bm">B-</option>
                                            <option  value="ABp">AB+</option>
                                            <option  value="ABm">AB-</option>
                                            <option  value="Op">O+</option>
                                            <option  value="Om">O-</option>
                                        </select>
                                    </div>

                                 <!-- Inicio Linha com TRES labels: campo TIPO SANGUINEO será OPCIONAL
                                    por iss, $errors->has('') está VAZIO-->
                                    @if ($errors->has(''))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('') }}</strong>
                                        </span>
                                    @endif

                                </div>

                             </div>
                             </div>

                               <!--
                             <div class="form-group"{{ $errors->has('pgtoparticular') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            <label for="pgtoparticular" class="col-md-12">Pagamento Particular:</label>
                                <input id="name" type="text" class="form-control" name="nampgtoparticulare" placeholder="Digite o valor recebido " value="{{ old('pgtoparticular') }}" required autofocus>

                                @if ($errors->has('pgtoparticular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pgtoparticular') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                       </div>
                        <!-- Fim Linha com TRES labels -->


                        <h1 class="titulo" id="tituloform">Endereço: </h1>
                                                <!-- Fim Linha com TRES labels -->
            <hr>
                          <!-- Inicio Linha com TRES labels: CPF, DATA NASC, TIPO SANGUINEO -->
                         <div class="form-group" id="name" {{ $errors->has('endereco') ? ' has-error' : '' }}">


                            <div class="col-md-8">
                            <label for="endereco" class="col-md-8">Endereco:</label>
                                <input id="name" type="text" class="form-control" name="endereco" placeholder="Digite seu endereço" value="{{ old('endereco') }}" required autofocus>

                                @if ($errors->has('endereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">


                            <div class="col-md-2">
                            <label for="numero" class="col-md-2">Numero:</label>
                                <input id="name" type="text" class="form-control" name="numero" placeholder="Digite nro do endereço" value="{{ old('numero') }}" required autofocus>

                                @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                    <div class="col-md-2">
                                    <label for="estado" class="col-md-2">Estado:</label>
                                        <input id="name" type="text" class="form-control" name="estado" placeholder="Digite seu estado" value="{{ old('estado') }}" required autofocus>

                                        @if ($errors->has('estado'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    </div>
                                </div>
                             </div>

                            <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">


                                <div class="col-md-8">
                                    <label for="bairro" class="col-md-8">Bairro:</label>
                                    <input id="name" type="text" class="form-control" name="bairro" placeholder="Digite seu bairro" value="{{ old('bairro') }}" required autofocus>

                                    @if ($errors->has('bairro'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bairro') }}</strong>
                                        </span>
                                    @endif

                                </div>


                        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">


                                <div class="col-md-2">
                                    <label for="cep" class="col-md-2">Cep:</label>
                                    <input id="name" type="text" class="form-control" name="cep" placeholder="Digite seu CEP" value="{{ old('cep') }}" required autofocus>

                                    @if ($errors->has('cep'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cep') }}</strong>
                                        </span>
                                    @endif

                                </div>


                    <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">


                            <div class="col-md-2">
                            <label for="cidade" class="col-md-2">Cidade:</label>
                                <input id="name" type="text" class="form-control" name="cidade" placeholder="Digite sua cidade" value="{{ old('cidade') }}" required autofocus>

                                @if ($errors->has('cidade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                @endif

                            </div>

                            </div>
                         </div>
                    </div>


                     <!-- Inicio Linha com duas labels  EMAIL, CONFIRMA EMAIL -->
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <label for="email" class="col-md-6">E-mail</label>
                                    <input id="name" type="text" class="form-control" name="email" placeholder="Digite seu email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>

                        <div class="form-group{{ $errors->has('confirmaremail') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <label for="confirmaremail" class="col-md-6">Confirmar E-mail</label>
                                <input id="name" type="text" class="form-control" name="confirmaremail" placeholder="Confirme seu e-mail" value="{{ old('confirmaremail') }}" required autofocus>

                                @if ($errors->has('confirmaremail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirmaremail') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>
                    </div>
                      <!-- Fim Linha com duas labels: EMAIL , CONFIRMAR EMAIL -->
                                          <!-- Fim Linha com duas labels:  EMAIL , CONFIRMAR EMAIL-->

                        <!-- inicio Linha com duas labels:  SENHA , CONFIRMAR SENHA-->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-4">
                            <label for="password" class="col-md-4">Senha:</label>
                                <input id="name" type="text" class="form-control" name="password" placeholder="Digite sua senha" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('confirmarpassword') ? ' has-error' : '' }}">
                                <div class="col-md-4">
                                    <label for="confirmarpassword" class="col-md-8">Confirmar senha:</label>
                                    <input id="name" type="text" class="form-control" name="confirmarpassword" placeholder="Confirme sua senha" value="{{ old('confirmarpassword') }}" required autofocus>

                                    @if ($errors->has('confirmarpassword'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('confirmarpassword') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                </div>
                             </div>
                             <hr>
                  <!-- fim Linha com duas labels:  SENHA , CONFIRMAR SENHA-->
                            <!-- Inicio Linha com duas labels -->

                <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <br>
                                 <button type="submit" class="btn btn-primary" id="botao">
                                    Salvar
                                </button>
                                <INPUT type="reset"  name="b2" value="Limpar" type="button" class="col-md-offset-1 btn btn-xs btn-danger">
                            </div>
                        </div>
                        <br><br>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
<br>

</body>


@endsection
