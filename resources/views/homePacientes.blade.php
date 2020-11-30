@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="sejabemvindo" id="sbv">{{ __('Seja Bem-Vindo!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Login realizado com sucesso!') }}
                </div>
            </div>
        </div>
 
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="painel-app">
                <div class="panel-heading" id="topo"><h1 class="titulo" id="tituloform">Cadastro do Paciente</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

                        <div class="clearfix">
                        <div id="left">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></div>

                        <div id="right">
                        <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }} ">
                            <label for="endereco" class="col-md-4 control-label">Endereço</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}" required autofocus>

                                @if ($errors->has('endereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>


                        <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                            <label for="bairro" class="col-md-4 control-label">Bairro</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required autofocus>

                                @if ($errors->has('bairro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
					
                        <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                            <label for="cidade" class="col-md-4 control-label">Cidade</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" required autofocus>

                                @if ($errors->has('cidade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
			
            
                        <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="estado" value="{{ old('estado') }}" required autofocus>

                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                            <label for="cep" class="col-md-4 control-label">CEP</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="cep" value="{{ old('cep') }}" required autofocus>

                                @if ($errors->has('cep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            
                        
                        <div class="form-group{{ $errors->has('telefoneprincipal') ? ' has-error' : '' }}">
                            <label for="telefoneprincipal" class="col-md-4 control-label">Telefone Principal</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="telefoneprincipal" value="{{ old('telefoneprincipal') }}" required autofocus>

                                @if ($errors->has('telefoneprincipal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefoneprincipal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            
                        
                        <div class="form-group{{ $errors->has('telefoneopcional') ? ' has-error' : '' }}">
                            <label for="telefoneopcional" class="col-md-4 control-label">Telefone Opcional</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="telefoneopcional" value="{{ old('telefoneopcional') }}" required autofocus>

                                @if ($errors->has('telefoneopcional'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefoneopcional') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            
                        
                        <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                            <label for="cpf" class="col-md-4 control-label">CPF</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('datanasc') ? ' has-error' : '' }}">
                            <label for="cpf" class="col-md-4 control-label">Data de Nascimento</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="datanasc" value="{{ old('datanasc') }}" required autofocus>

                                @if ($errors->has('datanasc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datanasc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                 

                        <div class="form-group{{ $errors->has('tiposanguineo') ? ' has-error' : '' }}">
                            <label for="tiposanguineo" class="col-md-4 control-label">Tipo Sanguineo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tiposanguineo" value="{{ old('tiposanguineo') }}" required autofocus>

                                @if ($errors->has('tiposanguineo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tiposanguineo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                Salvar aleterações
                                </button>
                            </div>
                        </div>

                                   
			       </div>
							
					</form>
                    
    </div>
        
    </div>


    <br> <br>
<script language="JavaScript">//inserir data, dia e mês ao final do layout ATUAIS!!!
        document.write("<class='data' id='datahorario'>")
	var mydate=new Date()
	var year=mydate.getYear()
	if (year<2000)
	year += (year < 1900) ? 1900 : 0
	var day=mydate.getDay()
	var month=mydate.getMonth()
	var daym=mydate.getDate()
	if (daym<10)
	daym="0"+daym
	var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
	var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Março de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
	document.write("   "+dayarray[day]+", "+daym+" "+montharray[month]+year+" ")
	document.write("</b></i></font>")
    </script>
<br> <br>
</div>

</div>
@endsection


