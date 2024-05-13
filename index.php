<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calendário Interativo</title>
	<!-- Fonte de Icones -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

</head>
<body> 
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="https://google.com.br">Google</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

  

<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <div class="background">
      <img src="img/fundo.png">
    </div>
    <a href="#user"><img class="circle" src="img/perfil.png"></a>
    <a href="#name"><span class="white-text name">John Doe</span></a>
    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
     
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="img/carrocel1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="img/carrocel2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/carrocel3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="img/carrocel4.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="img/carrocel5.jpg"></a>
  </div>
	<div class="container" style="margin-top: 100px;">

		<div class="row">
			<div class="col s12">
				<form>
					<input type="text" class="datepicker">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<form>
					<input type="text" class="timepicker">
				</form>
			</div>
		</div>
	</div>

    <div class="row">
        <div class="col s4"></div>
        <div class="col s4" >
            <a style="margin:0 auto" class="waves-effect waves-light btn modal-trigger" href="#modal1">
                Abrir Mensagem  
            </a>
        </div>
        <div class="col s4"></div>
    </div>
     <!-- Modal Trigger -->
  

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Meus dados</h4>
    <p> Aqui é o corpo da mensagem que estou passando</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">
        Fechar
    </a>
  </div>
</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

            $('.sidenav').sidenav();

            $('.modal').modal();

            $('.carousel').carousel();

			$('.datepicker').datepicker({
				format: 'dddd, dd mmm yyyy',
				showClearBtn: true,
				i18n:{
					cancel: 'Cancelar',
					clear: 'Limpar',
					done: 'Ok',
					previusMonth: '<',
					nextMonth: '>',
					months:[
						'Janeiro',
						'Fevereiro',
						'Março',
						'Abril',
						'Maio',
						'Junho',
						'Julho',
						'Agosto',
						'Setembro',
						'Outubro',
						'Novembro',
						'Dezembro'
					],
					monthsShort:[
						'Jan',
						'Fev',
						'Mar',
						'Abr',
						'Mai',
						'Jun',
						'Jul',
						'Ago',
						'Set',
						'Out',
						'Nov',
						'Dez'
					],
					weekdays:[
						'Domingo',
						'Segunda-feira',
						'Terça-feira',
						'Quarta-feira',
						'Quinta-feira',
						'Sexta-feira',
						'Sábado'
					],
					weekdaysShort:[
						'Dom',
						'Seg',
						'Ter',
						'Qua',
						'Qui',
						'Sex',
						'Sab'
					],
					weekdaysAbbrev:['D','S','T','Q','Q','S','S'],
				}
			});
			$('.timepicker').timepicker({
				i18n:{
					cancel: 'Cancelar',
					clear: 'Limpar',
					done: 'Ok',
				},
				twelveHour: false,
			});
		});
	</script>
</body>
</html>