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
    		.siblings('').css('opacity','2');
    });
        $('.btn-radio').not(this).removeClass('active')
    		.siblings('input').prop('checked',false)
            .siblings('').css('opacity','0.5');
    	
});

</script>
<script type="text/javascript">
$(document).ready(function () {
	$(".listrap").on('click',function(){
		$(".active").removeClass('active');
		$(this).find('.panel-body').addClass('active');
	});
});


</script>
<script type="text/javascript">
$(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-primary btn-fab btn-raised"><span class="glyphicon glyphicon-chevron-up"></span></div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
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
			box-shadow: 0px 0px 30px #047167; /*SHADOW DAS DIV'S DOS CANDIDATOS*/
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
 {
	opacity: 0.5;
	margin-bottom: 5px;
}

.space-20 {
    margin-top: 20px;
}

<!--listrap-->


.listrap {
            list-style-type: none;
            margin: 0;
            padding: 0;
            cursor: default;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

        }

        .listrap div {
            margin: 0;
            padding: 10px;

        }

        .listrap div.active, .listrap div:hover {
            /*background-color: #d9edf7;*/

        }

        .listrap strong {
            margin-left: 10px;
        }

        .listrap .listrap-toggle {
            display: inline-block;
           
        }

        .listrap .listrap-toggle span {
            background-color: #009587;
            opacity: 0.8;
            z-index: 100;
            width: 60px;
            height: 60px;
            display: none;
            position: absolute;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            vertical-align: middle;
            color: #ffffff;

        }

        .listrap .listrap-toggle span:before {
            font-family: 'Glyphicons Halflings';
            content: "\e013";
        }

        .listrap div.active .listrap-toggle span {
            display: block;

        }
        #toTop{
	position: fixed;
	bottom: 10px;
	right: 10px;
	cursor: pointer;
	display: none;
}
	</style>
<div class="container">

	<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top" role="navigation">
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
	<div class="col-md-12" style="position:fixed; height:30px" align="center"><!--BOTÃO VOTAR-->
    <a href="javascript:void(0)" class="btn btn-primary responsive btn-lg">Votar</a>

	</div>
</nav>


	<div class="well row">

		

				<legend><h2>Candidatos Votação</legend></h2>

    			<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
						
				
					</div>
					
					
					
				</div>
				
				
				<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
					
				
					</div>
					
					
				</div>
				
				<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
						
				
					</div>
					
					
				</div>
				
				<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
						
				
					</div>
					
					
					
				</div>
				<div class="col-md-12" style="height:20px;">
				</div>	
				<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
						
				
					</div>
					
					
					
				</div>
				
				<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
						
				
					</div>
					
					
					
				</div>
				
				<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
						
				
					</div>
					
					
					
				</div>
				
						<div class="listrap col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					
					
					<div class="panel price panel-white">
						<div class="panel-heading  text-center">
						<h3>Fulano da Silva</h3>
						</div>
						<div class="panel-body text-center">
							<div class="listrap-toggle">
							<span></span>

							<img src="img/avatar1.png" class="img-responsive img-circle center-block" height="200px" width="200px">
							</div>
						</div>
						<ul class="list-group list-group-flush text-center">
							
						</ul>
						
				
					</div>
					
					
					
				</div>
</div>

</body>

</html>	