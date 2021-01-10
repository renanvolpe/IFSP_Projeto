@section('content')
<head>

<body class="bcolor" id="bodycor">

<div class="container">
<div class="row">

           <div class="panel panel-default" id="painel-app">

            <div class="panel-heading" id="topo"><h3 class="titulo" id="tituloform"> Cadastro
            </h1>
            </div>

            <div class="panel-body">

          <!--  <h1 class="titulo" id="tituloform"> Dados Pessoais: </h1> -->

            <div class="linha">
                <div class="col-3">

            

             <img id="imgcadastro" class="img" src="{{ URL::to('/assets/avatar/avatarhomem.jpg') }}" />
                                   <!-- Inicio Linha com duas labels  NOME, SOBRENOME -->
            </div>

            <div class="col-md-9">

            <form class="form-horizontal" id="formletra" role="form" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

         <div class="coluna-50" id="tituloform">Dados Pessoais:
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <hr>
                    <div class="col-md-3">
                            <label for="name" class="col-md-2 control-label">Nome:</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('sobrenome') ? ' has-error' : '' }}">


                                <div class="col-md-8">
                                    <label for="sobrenome" class="col-md-2 control-label">Sobrenome</label>
                                    <input id="sobrenome" type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="{{ old('sobrenome') }}" required autofocus>

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

                                <select id="ddd1" type="int" class="form-control" name="ddd1" value="{{ old('ddd1') }}" required autofocus>
                                    <option value="">Escolha</option>
                                    <?php
                                    for ($x=11; $x < 100; $x++)
                                    {
                                        if($x%10==0)
                                        {
                                            continue;
                                        }
                                        else{
                                        ?>

                                        <option value="<?php echo $x;?>"><?php echo $x;?></option>
                                        
                                        <?php
                                        }
                                    }
                                    ?>
                                    
                                    </select>
                                    </select>
                                @if ($errors->has('ddd1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ddd1') }}</strong>
                                    </span>
                                @endif

                            </div>
                        <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                            <div class="col-md-3">
                            <label for="telefone" class="col-md-12">Telefone Principal: </label>
                                <input id="telefone" type="int" class="form-control" name="telefone" placeholder="Digite seu telefone" value="{{ old('telefone') }}" required autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">

                            <div class="col-md-2">
                                <label for="ddd2" class="col-md-2 control-label">DDD:</label>
                                <select id="ddd2" type="int" class="form-control" name="ddd2" value="{{ old('ddd2') }}" required autofocus>
                                    <option value="">Escolha</option>
                                    <?php
                                    for ($x=11; $x < 100; $x++)
                                    {
                                        if($x%10==0)
                                        {
                                            continue;
                                        }
                                        else{
                                        ?>

                                        <option value="<?php echo $x;?>"><?php echo $x;?></option>
                                        
                                        <?php
                                        }
                                    }
                                    ?>
                                    
                                    </select>

                                @if ($errors->has(''))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('') }}</strong>
                                        </span>
                                    @endif

                            </div>

                            <div class="col-md-3">
                            <label for="telefonesecundario" class="col-md-12">Telefone Secundário: </label>
                                <input id="telefonesecundario" type="int" class="form-control" name="telefonesecundario" placeholder="Digite seu telefone" value="{{ old('telefonesecundario') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif

                            </div>
                             </div>
                        </div>
                        </div>
                        <!-- Fim Linha com QUATRO labels -->


                         <!-- Inicio Linha com TRES labels: CPF, DATA NASC, TIPO SANGUINEO -->
                         <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            <label for="cpf" class="col-md-2">CPF:</label>
                                <input id="cpf" type="text" class="form-control" name="cpf" placeholder="Digite seu CPF" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif

                            </div>
                    
                    
                            <div class="form-group{{ $errors->has('datanasc') ? ' has-error' : '' }}">
                           <div class="col-md-4">
                            <label for="datanasc" class="col-md-12">Data nascimento:</label>
                                <input id="datanasc" type="date" class="form-control" name="datanasc" placeholder="Digite sua data de nascimento" value="{{ old('datanasc') }}" required autofocus>
                                                     
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
                                    <label for="tiposanquineo" >Tipo Sanguineo</label>
                                    </div>
                                    <div class="col-md-2">
                                    <select type="select" name="tiposanguineo" id="tiposanguineo" style="align=center"class="form-control" >
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
                                </div> </div>
<!--                                <div class="form-group{{ $errors->has('pgtoparticular') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            <label for="pgtoparticular" class="col-md-12">Pagamento Particular:</label>
                                <input id="nampgtoparticulare" type="text" class="form-control" name="nampgtoparticulare" placeholder="Digite o valor recebido " value="{{ old('pgtoparticular') }}" required autofocus>

                                @if ($errors->has('pgtoparticular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pgtoparticular') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                       </div>
                        <!-- Fim Linha com TRES labels -->
         
            <div class="col-md-12">
                       
                        <h1 class="coluna-50" id="tituloform">Endereço: </h1>
                                                <!-- Fim Linha com TRES labels -->
            <hr>
                          <!-- Inicio Linha com TRES labels: CPF, DATA NASC, TIPO SANGUINEO -->
                         <div class="form-group" id="name" {{ $errors->has('endereco') ? ' has-error' : '' }}>
                            <div class="col-md-8">
                            <label for="endereco" class="col-md-8">Endereco:</label>
                                <input id="endereco" type="text" class="form-control" name="endereco" placeholder="Digite seu endereço" value="{{ old('endereco') }}" required autofocus>
                                @if ($errors->has('endereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">


                            <div class="col-md-2">
                            <label for="numero" class="col-md-2">Numero:</label>
                                <input id="numero" type="text" class="form-control" name="numero" placeholder="Número" value="{{ old('numero') }}" required autofocus>

                                @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                    <div class="col-md-2">
                                    <label for="estado" class="col-md-2">Estado:</label>
                                    <select id="estado" type="text" class="form-control" name="estado" value="{{ old('estado') }}" required autofocus>>
                                        <option value="escolha">Escolha</option>   
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
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
                                    <input id="bairro" type="text" class="form-control" name="bairro" placeholder="Digite seu bairro" value="{{ old('bairro') }}" required autofocus>

                                    @if ($errors->has('bairro'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bairro') }}</strong>
                                        </span>
                                    @endif

                                </div>


                        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">


                                <div class="col-md-2">
                                    <label for="cep" class="col-md-2">Cep:</label>
                                    <input id="cep" type="text" class="form-control" name="cep" placeholder="CEP" value="{{ old('cep') }}" required autofocus>

                                    @if ($errors->has('cep'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cep') }}</strong>
                                        </span>
                                    @endif

                                </div>


                    <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">


                            <div class="col-md-2">
                            <label for="cidade" class="col-md-2">Cidade:</label>
                                <input id="cidade" type="text" class="form-control" name="cidade" placeholder="Cidade" value="{{ old('cidade') }}" required autofocus>

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
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Digite seu email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>

                        <div class="form-group{{ $errors->has('confirmaremail') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <label for="confirmaremail" class="col-md-6">Confirmar E-mail</label>
                                <input id="confirmaremail" type="email" class="form-control" name="confirmaremail" placeholder="Confirme seu e-mail" value="{{ old('confirmaremail') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control" name="password" placeholder="Digite sua senha" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('confirmarpassword') ? ' has-error' : '' }}">
                                <div class="col-md-4">
                                    <label for="confirmarpassword" class="col-md-8">Confirmar senha:</label>
                                    <input id="confirmarpassword" type="password" class="form-control" name="confirmarpassword" placeholder="Confirme sua senha" value="{{ old('confirmarpassword') }}" required autofocus>

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
                            <div class="col-md-4 col-md-offset-4">
                                <br>
                                 <button type="submit" class="btn btn-primary" id="botao">
                                    Salvar
                                </button>
                                <INPUT type="reset"  id="limpar" name="b2" value="Limpar" type="button" class="col-md-offset-1 btn btn-xs btn-danger">
                            </div>
                        </div>
                        <br><br>
                    </form>

                </div>
            </div>
        </div>
</div>
    </div>
</div>
<br>

</body>


@endsection