<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css">

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/material.min.js"></script>
<script type="text/javascript" src="js/ripples.min.js"></script>
 <script type="text/javascript"src="js/jquery-1.10.2.min"></script>


<script type="text/javascript">
$.material.init();
$(function () {
    $('.btn-radio').click(function(e) {
       $(this).addClass('active')
            .siblings('input').prop('checked',true)
    		.siblings('.img-radio').css('opacity','2');
    });
        $('.btn-radio').not(this).removeClass('active')
    		.siblings('input').prop('checked',false)
            .siblings('.img-radio').css('opacity','0.5');
    	
});
</script>

<link rel="stylesheet" href="css/material.css">
<link rel="stylesheet" href="css/material.min.css">
<link rel="stylesheet" href="css/material-wfont.css">
<link rel="stylesheet" href="css/material-wfont.min.css">
<link rel="stylesheet" href="css/ripples.css">
<link rel="stylesheet" href="css/ripples.min.css">

<title>Votação</title>
</head>

<body>
	<style>
	@import url("http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css");
@import url("http://fonts.googleapis.com/css?family=Roboto:400,300,700italic,700,500&subset=latin,latin-ext");

body {
        padding-top: 40px;
        padding-bottom: 40px;
    	
      }
	
	/* COMMON PRICING STYLES */
		.panel.price,
		.panel.price>.panel-heading{
			border-radius:0px;
			 -moz-transition: all .3s ease;
			-o-transition:  all .3s ease;
			-webkit-transition:  all .3s ease;
		}
		.panel.price:hover{
			box-shadow: 0px 0px 30px #047167;
		}
		.panel.price:hover>.panel-heading{
			box-shadow: 0px 0px 30px rgba(0,0,0, .2) inset;
		}
		
				
		.panel.price>.panel-heading{
			box-shadow: 0px 5px 0px rgba(50,50,50, .2) inset;
			text-shadow:0px 3px 0px rgba(50,50,50, .6);
		}
			
		.price .list-group-item{
			border-bottom-:1px solid rgba(250,250,250, .5);
		}
		
		.panel.price .list-group-item:last-child {
			border-bottom-right-radius: 0px;
			border-bottom-left-radius: 0px;
		}
		.panel.price .list-group-item:first-child {
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
		}
		
		.price .panel-footer {
			color: #fff;
			border-bottom:0px;
			background-color:  rgba(0,0,0, .1);
			box-shadow: 0px 3px 0px rgba(0,0,0, .3);
		}
		
		
		.panel.price .btn{
			box-shadow: 0 -1px 0px rgba(50,50,50, .2) inset;
			border:0px;
		}
		
	/* green panel */
	
		
		.price.panel-green>.panel-heading {
			color: #fff;
			background-color: #57AC57;
			border-color: #71DF71;
			border-bottom: 1px solid #71DF71;
		}
		
			
		.price.panel-green>.panel-body {
			color: #fff;
			background-color: #65C965;
		}
				
		
		.price.panel-green>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-green .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* blue panel */
	
		
		.price.panel-blue>.panel-heading {
			color: #fff;
			background-color: #608BB4;
			border-color: #78AEE1;
			border-bottom: 1px solid #78AEE1;
		}
		
			
		.price.panel-blue>.panel-body {
			color: #fff;
			background-color: #73A3D4;
		}
				
		
		.price.panel-blue>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-blue .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* red price */
		
	
		.price.panel-red>.panel-heading {
			color: #fff;
			background-color: #D04E50;
			border-color: #FF6062;
			border-bottom: 1px solid #FF6062;
		}
		
			
		.price.panel-red>.panel-body {
			color: #fff;
			background-color: #EF5A5C;
		}
		
		
		
		
		.price.panel-red>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-red .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* grey price */
		
	
		.price.panel-grey>.panel-heading {
			color: #fff;
			background-color: #6D6D6D;
			border-color: #B7B7B7;
			border-bottom: 1px solid #B7B7B7;
		}
		
			
		.price.panel-grey>.panel-body {
			color: #fff;
			background-color: #808080;

		}
		

		
		.price.panel-grey>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-grey .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* white price */
		
	
		.price.panel-white>.panel-heading {
			color: #333;
			background-color: #f9f9f9;
			border-color: #ccc;
			border-bottom: 1px solid #ccc;
			text-shadow: 0px 2px 0px rgba(250,250,250, .7);
		}
		
		.panel.panel-white.price:hover>.panel-heading{
			box-shadow: 0px 0px 30px rgba(0,0,0, .05) inset;
		}
			
		.price.panel-white>.panel-body {
			color: #fff;
			background-color: #dfdfdf;
		}
				
		.price.panel-white>.panel-body .lead{
				text-shadow: 0px 2px 0px rgba(250,250,250, .8);
				color:#666;
		}
		
		.price:hover.panel-white>.panel-body .lead{
				text-shadow: 0px 2px 0px rgba(250,250,250, .9);
				color:#333;
		}
		
		.price.panel-white .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		.row {
    margin: 80px 0px 80px 0px;
    }

.teste2 {
    margin: 10px 10px 10px 10px;
    -webkit-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    transform: scale(1, 1);
    transition-duration: 0.3s;
    -webkit-transition-duration: 0.3s; /* Safari */
    }

.teste2:hover {
	cursor: pointer;
	-webkit-transform: scale(2, 2);
    -ms-transform: scale(2, 2);
    transform: scale(1.1, 1.1);
    transition-duration: 0.3s;
    -webkit-transition-duration: 0.3s; /* Safari */
    box-shadow: 2px 2px 4px #888888;
    z-index: 1;
    }
    .btn-radio {
	width: 100%;
}
.img-radio {
	opacity: 0.5;
	margin-bottom: 5px;
}

.space-20 {
    margin-top: 20px;
}
	</style>
<div class="container">
	<!-- Fixed navbar -->
<nav class="navbar navbar navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Sistema de Votação</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<p class="navbar-text pull-right">
				Bem Vindo(a) <a href="#" class="navbar-link">Usuário</a>
			</p>
			<ul class="nav navbar-nav">

				<li class="active" id="home">
					<a href="{{ URL::route('dashboard.index')}}">Home</a>
				</li>

				<li class="dropdown" id="candidato">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidato
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ URL::route('candidato.create') }}">
								<span class="glyphicon glyphicon-plus"></span> Adicionar
							</a>
						</li>
						<li>
							<a href="{{ URL::route('candidato.index') }}">
								<span class="glyphicon glyphicon-search"></span> Localizar
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown" id="eleitor">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Eleitor
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ URL::route('eleitor.create') }}">
								<span class="glyphicon glyphicon-plus"></span> Adicionar
							</a>
						</li>
						<li>
							<a href="{{ URL::route('eleitor.index') }}">
								<span class="glyphicon glyphicon-search"></span> Localizar
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown" id="responsavel">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Responsavel
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ URL::route('responsavel.create') }}">
								<span class="glyphicon glyphicon-plus"></span> Adicionar
							</a>
						</li>
						<li>
							<a href="{{ URL::route('responsavel.index') }}">
								<span class="glyphicon glyphicon-search"></span> Localizar
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown" id="usuario">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ URL::route('usuario.create') }}">
								<span class="glyphicon glyphicon-plus"></span> Adicionar
							</a>
						</li>
						<li>
							<a href="{{ URL::route('usuario.index') }}">
								<span class="glyphicon glyphicon-search"></span> Localizar
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown" id="votacao">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Votação
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ URL::route('votacao.create') }}">
								<span class="glyphicon glyphicon-plus"></span> Adicionar
							</a>
						</li>
						<li>
							<a href="{{ URL::route('votacao.index') }}">
								<span class="glyphicon glyphicon-search"></span> Localizar
							</a>
						</li>
					</ul>
				</li>
			</ul>

		</div><!--/.nav-collapse -->
	</div>
</nav>

	<div class="well row">
				<legend><h2>Candidatos Votação</legend></h2>
    			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<img src="img/avatar1.png" class="img-responsive center-block img-radio" height="200px" width="200px">
						<button type="button" class="btn btn-primary btn-radio">votar</button>
        				<input type="checkbox" id="middle-item" class="hidden">
						</div>
					
						<!--<div class="panel-footer">

						
						</div>-->
					</div>
					
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<img src="img/avatar1.png" class="img-responsive center-block img-radio"  height="200px" width="200px">
							<button type="button" class="btn btn-primary btn-radio">votar</button>
        				<input type="checkbox" id="middle-item" class="hidden">
						</div>
						<ul class="list-group list-group-flush text-center">
							<!--<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>-->
						</ul>
						<!--<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">Votar</a>
						</div>-->
					</div>
					<!-- /PRICE ITEM -->
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<img src="img/avatar1.png" class="img-responsive center-block" height="200px" width="200px">
						</div>
						<ul class="list-group list-group-flush text-center">
							<!--<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>-->
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">Votar</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="thumb">
							<img src="img/avatar1.png" class="img-responsive center-block" height="200px" width="200px">
						</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							<!--<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>-->
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">Votar</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<img src="img/avatar1.png" class="img-responsive center-block" height="200px" width="200px">
						</div>
						<ul class="list-group list-group-flush text-center">
							<!--<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>-->
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">Votar</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<img src="img/avatar1.png" class="img-responsive center-block" height="200px" width="200px">
						</div>
						<ul class="list-group list-group-flush text-center">
							<!--<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>-->
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">Votar</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<img src="img/avatar1.png" class="img-responsive center-block" height="200px" width="200px">
						</div> 
						<ul class="list-group list-group-flush text-center">
							<!--<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>-->
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">Votar</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white teste">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<img src="img/avatar1.png" class="img-responsive center-block" height="200px" width="200px">
						</div>
						<ul class="list-group list-group-flush text-center">
							<!--<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>-->
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">Votar</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				
			</div>
            
</div>
</body>

</html>	