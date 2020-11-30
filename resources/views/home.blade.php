@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="pt-br" id="fundo">  
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Administrativo</title>
     
        <style>

#fundo{
    color: white;
     width: 100%;
    height: 100%;
   /*opacity: 0.5;
    background-image: url("assets/human_resource.jpg"); */
    font-family: 'Nunito';
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-size: 100% 100% 

}
table, th, td {
    background-color: white;
            color: white;
            border: 1px solid black;
            border-collapse: collapse;
            table-layout: auto; width: 100%; /* table-layout: auto; serve p/ AJUSTAR campos na tabela*/ 
            margin: auto;
            text-align: center;
            font-weight: bold;
            opacity: 1;
            }
       
            td{
                color: black;
                font-size: 15px;
                font-family: times;
                margin: auto;
                white-space: nowrap;
             }

            th{
                background-color: #295872;;
                color: white;
                white-space: nowrap;
             }




             .topnav {
  overflow: hidden;
  background-color: #333;
  text-align: center;
        white-space: nowrap;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  text-align: center;
        white-space: nowrap;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
        </style>

	</head>
	<body role="" class="bcolor" id="bodycor">
 
    <!-- Fixed navbar -->
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="#administracao">Administração</a>
                <a href="#pacientes">Pacientes</a>
           
                <a href="#medicos">Médicos</a>
                <a href="#about">About</a>
                <form class="form-inline my-2 my-lg-0" aling=left>
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" id="botao" type="submit">Pesquisar</button>
            </form>
            </div>
          


           </div><!--/.nav-collapse -->
      
            <div class="">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}"  class="a" id="corLR">Administração</a>
                    @else
                        <a href="{{ route('homePacientes') }}" class="a" id="corLR">Pacientes</a>

                        @if (Route::has('medicos'))
                            <a href="{{ route('homeMedicos') }}" class="a" id="corLR">Médicos</a>
                        @endif
                    @endauth
                </div>
            @endif


	<div class="col-md-8 col-md-offset-2" >
	
			<h1 class="panel-heading" id="tituloMenu">Painel de Administração</h1>
      
        
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
                    	<tr>
                            <th>Inscrição</th>
                            <th>Imagem</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Nivel de acesso</th>
							<th>Cadastrado</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td>1</td>

                            <td>
           
                         <div class="col-md-1 col-md-offset-1">
                            <img id="avatarperfil" class="img" src="/assets/avatar/1478020898.png"  alt="" />
                         </div>
                            
							<td>Alexssandro Ferreira da Silva</td>
							<td>alex@gmail.com</td>
							<td>Administrador</td>
							<td>10/10/1980 10:15:20</td>
							<td>
								<button type="button" class="btn btn-xs btn-primary">Visualizar</button>
								<button type="button" class="btn btn-xs btn-warning">Editar</button>
								<button type="button" class="btn btn-xs btn-danger">Apagar</button> 
							</td>
						</tr>              
                    </tbody>
                    
                    <tbody>
						<tr>
                            <td>2</td>

                            <td>
           
                         <div class="col-md-1 col-md-offset-1">
                            <img id="avatarperfil" class="img" src="/assets/avatar/avatarhomem.jpg"  alt="" />
                         </div>
                            
							<td>João Pedro</td>
							<td>joao@gmail.com</td>
							<td>Paciente</td>
							<td>10/10/1980 10:15:20</td>
							<td>
								<button type="button" class="btn btn-xs btn-primary">Visualizar</button>
								<button type="button" class="btn btn-xs btn-warning">Editar</button>
								<button type="button" class="btn btn-xs btn-danger">Apagar</button> 
							</td>
						</tr>              
					</tbody>


                    <tbody>
						<tr>
                            <td>3</td>

                            <td>
           
                         <div class="col-md-1 col-md-offset-1">
                            <img id="avatarperfil" class="img" src="/assets/avatar/avatarmulher.jpg"  alt="" />
                         </div>
                            
							<td>Aline Costa</td>
							<td>aline@gmail.com</td>
							<td>Paciente</td>
							<td>10/10/1980 10:15:20</td>
							<td>
								<button type="button" class="btn btn-xs btn-primary">Visualizar</button>
								<button type="button" class="btn btn-xs btn-warning">Editar</button>
								<button type="button" class="btn btn-xs btn-danger">Apagar</button> 
							</td>
						</tr>              
					</tbody>

                    <tbody>
						<tr>
                            <td>4</td>

                            <td>
           
                         <div class="col-md-1 col-md-offset-1">
                            <img id="avatarperfil" class="img" src="/assets/avatar/medico.jpg"  alt="" />
                         </div>
                            
							<td>Renan Pereira</td>
							<td>aline@gmail.com</td>
							<td>Médico</td>
							<td>10/10/1980 10:15:20</td>
							<td>
								<button type="button" class="btn btn-xs btn-primary">Visualizar</button>
								<button type="button" class="btn btn-xs btn-warning">Editar</button>
								<button type="button" class="btn btn-xs btn-danger">Apagar</button> 
							</td>
						</tr>              
                    </tbody>
                    
				</table>
			</div>
		</div>
	</div>

           
</html>

@endsection