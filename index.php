<!DOCTYPE html>
<html lang="en">
<head>

  <title>Alerta Previdência</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  <script src="js/bootstrap.min.js"></script>
  <style>
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center margemTop bannerPrincipal">    

         <center class="margemLogo"> 
              <img src="img/logo.png" class="img-responsive"> 
        </center>    
</div>

<nav class="navbar navbar-default navbar-fixed-top topoPrincipal">
  <div class="container">

  <div class="">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#pricing">SOBRE</a></li>
        <li><a href="#contact">CONTATO</a></li>
      </ul>
    </div>
  </div>


  </div>
</nav>




<div class="row container-fluid painelForm">
  <div id="about" class="well">
    <form action="suspeitas.php"> 
        <div class="form-group">
          <label for="email">Tipo de Benefício</label>
          <select class="form-control" id="selTipoBeneficio">
          <option selected>Selecione o tipo de Benefício Previdenciário</option>
          <option value="">Aposentadoria Rural Por Tempo de Serviço</option>
          <option value="">Aposentadoria Urbana Por Invalidez</option>
          <option value="">Aposentadoria Urbana Por Auxílio Doença</option>
          </select>
        </div>
 
      <div class="col-sm-4">
        <div class="form-group">
          <label for="pwd">UF</label>
         <select class="form-control" id="selUf">
          <option selected>Selecione a UF</option>
          <option value="">BA</option>
          <option value="">CE</option>
          <option value="">PB</option>
          <option value="">PI</option>
          </select>
         </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="email">Mês</label>
          <select class="form-control" id="selTipoBeneficio">
            <option selected value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="pwd">Ano</label>
          <select class="form-control" id="selUf">
            <option selected value="2018">2018</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
          </select>
         </div>
      </div>
      <button type="submit" class="btn btn-primary alignRight">Consultar</button>
      <span class="btn"></span>
    </form>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid painelForm">

    
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
              Quantidade de Benefícios no Semestre
              <span class="glyphicon glyphicon-chevron-down">
            </a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 64.51%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="textMes">JAN - 2014</span> </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 80.37%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="textMes">FEV - 2509</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 86.26%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="textMes">MAR - 2693</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 93.66%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span class="textMes">ABR - 2924</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" style="width: 99.65%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span class="textMes">MAI - 3111</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 92.54%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span class="textMes">JUN - 2889</span></div>
            </div>            
            <a href="suspeitas.php" type="button" class="btn btn-success">Análise de Suspeitas </a>
          </div>
        </div>
        </div>

    <div class="well"><h3>Gastos Anuais com Benefícios da Previdência</h3></div>

  <div class="row ">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading1">
          <span id="iconDin" class="glyphicon glyphicon-list-alt"></span>
        </div>
        <div class="panel-body">
          <h3>Quantidade de Benefícios Concedidos</h3>
        </div>
        <div class="panel-footer">
          <h3>32.086</h3>
          <h4>Ano</h4>
          <!-- <button class="btn btn-lg">Atualizar</button> -->
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <span id="iconDin" class="glyphicon glyphicon-usd"></span>
        </div>
        <div class="panel-body">
          <h3>Gastos Totais</h3>
        </div>
        <div class="panel-footer">
          <h3>R$ 28.208.000</h3>
          <h4>Ano</h4>
          <!-- <button class="btn btn-lg">Sign Up</button> -->
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading3">
          <span id="iconDin" class="glyphicon glyphicon-user"></span>
        </div>
        <div class="panel-body">
          <h3>Valor Médio do Benefício</h3>
        </div>
        <div class="panel-footer">
          <h3>R$ 879,14</h3>
          <h4>Mês</h4>
        </div>
      </div>      
    </div>    
  </div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Alerta Previdência <a href="http://www.boxme.com.br/index.php" title="Visit w3schools">www.alertaprevidencia.org</a></p>
</footer>

<script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDRao7AByy_qHiVYjPDRlMhx2JwU5FEYrc",
    authDomain: "alertapredencia.firebaseapp.com",
    databaseURL: "https://alertapredencia.firebaseio.com",
    projectId: "alertapredencia",
    storageBucket: "alertapredencia.appspot.com",
    messagingSenderId: "171388986555"
  };
  firebase.initializeApp(config);
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
