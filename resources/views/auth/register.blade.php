

@extends('layouts.app')
@section('content')
<head>

<body class="bcolor" id="bodycor">

<div class="container">
<div class="row">
        
    <div class="row">
        
            <div class="panel panel-default" id="painel-app">

            <div class="panel-heading" id="topo"><h3 class="titulo" id="tituloform"> Cadastro </h1></div>

                <div class="panel-body">
                   
            <h1 class="titulo" id="tituloform"> Dados Pessoais: </h1>
                     
                        <hr>
             <img id="avatarperfil" class="img" src="/assets/avatar/avatarhomem.jpg" />
                                   <!-- Inicio Linha com duas labels  NOME, SOBRENOME -->
            <div class="col-md-12>
                <form class="form-horizontal" id="formletra" role="form" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

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
                              
                                <select id="name" type="number" class="form-control" name="ddd1" value="{{ old('ddd1') }}" required autofocus>
                                    <option value="">Escolha o DDD</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">69</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    </select>
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
                                <select id="name" type="number" class="form-control" name="ddd2" value="{{ old('ddd2') }}" required autofocus>
                                    <option value="">Escolha o DDD</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">69</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    </select>   
                                
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

                        <div class="col-md-12">
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
                                    <select id="name" type="text" class="form-control" name="estado" value="{{ old('estado') }}" required autofocus>>
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
