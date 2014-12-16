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

</script>

<link rel="stylesheet" href="css/material.css">
<link rel="stylesheet" href="css/material.min.css">
<link rel="stylesheet" href="css/material-wfont.css">
<link rel="stylesheet" href="css/material-wfont.min.css">
<link rel="stylesheet" href="css/ripples.css">
<link rel="stylesheet" href="css/ripples.min.css">

<title>Votação</title>
</head>
<style>
.cuadro_intro_hover{
        padding: 0px;
		position: relative;
		overflow: hidden;
		height: 200px;
	}
	.cuadro_intro_hover:hover .caption{
		opacity: 1;
		transform: translateY(-150px);
		-webkit-transform:translateY(-150px);
		-moz-transform:translateY(-150px);
		-ms-transform:translateY(-150px);
		-o-transform:translateY(-150px);
	}
	.cuadro_intro_hover img{
		z-index: 4;
	}
	.cuadro_intro_hover .caption{
		position: absolute;
		top:150px;
		-webkit-transition:all 0.3s ease-in-out;
		-moz-transition:all 0.3s ease-in-out;
		-o-transition:all 0.3s ease-in-out;
		-ms-transition:all 0.3s ease-in-out;
		transition:all 0.3s ease-in-out;
		width: 100%;
	}
	.cuadro_intro_hover .blur{
		background-color: rgba(0,149,135,0.7);
		height: 300px;
		z-index: 5;
		position: absolute;
		width: 100%;
	}
	.cuadro_intro_hover .caption-text{
		z-index: 10;
		color: #fff;
		position: absolute;
		height: 300px;
		text-align: center;
		top:-20px;
		width: 100%;
	}
</style>
<body>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<hr>

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

<div>
<p></p>
</div>


      
    <div class="center-block container"><br/></br>
    	
    	<div class="well row">
    		
	<div class="col-lg-12">
   <legend><h2>Votação</legend></h2>
    	<div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						
							<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
					
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Samae</h3>
								Fim da Votação em 25/12/2014.<div></div>
										<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>

							</div>
						</div>
					</div>
				
	    </div>
       <div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Prefeitura</h3>
								Fim da Votação em 25/12/2014.<div></div>
								<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>
							</div>
						</div>
					</div>
				
		</div>
		<div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Samae</h3>
								Fim da Votação em 25/12/2014.<div></div>
								<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>
							</div>
						</div>
					</div>
				
	    </div>
	    <div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Samae</h3>
								Fim da Votação em 25/12/2014.<div></div>
								<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>
							</div>
						</div>
					</div>
				
	    </div>
	    <div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Samae</h3>
								Fim da Votação em 25/12/2014.<div></div>
								<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>
							</div>
						</div>
					</div>
				
	    </div>
	    <div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Samae</h3>
								Fim da Votação em 25/12/2014.<div></div>
								<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>
							</div>
						</div>
					</div>
	    </div>
	    <div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Samae</h3>
								Fim da Votação em 25/12/2014.<div></div>
								<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>
							</div>
						</div>
					</div>
				
	    </div>
	   <!-- <div class="well col-lg-3" style="margin-left:1013px; margin-top:-255px;">-->
	   		<div class="well col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<img src="img/a1.jpg" style="height:100%; width:100%" class="img-responsive" alt="">
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Votação Samae</h3>
								Fim da Votação em 25/12/2014.<div></div>
								<a href="candidatos_votacao.php" class="btn btn-primary btn-raised">Entrar</a>
							</div>
						</div>
					</div>
				
	    	</div>









			</div>
   		</div>	 
    </div>     
</div>
	


					
					
        
</body>

</html>