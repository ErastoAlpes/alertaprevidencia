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

    <div class="alinhaCenterLogo">

        <div>
           <img src="img/logo.jpeg" class="img-responsive" alt="Cinque Terre"> 
        </div>

    </div>
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
    <form action="/action_page.php">     
        <div class="form-group">
          <label for="email">Tipo de Benefício</label>
          <select class="form-control" id="selTipoBeneficio">
          <option selected>Selecione o tipo de Benefício Previdenciário</option>
          <option value="">Benefício 1</option>
          <option value="">Benefício 1</option>
          <option value="">Benefício 1</option>
          <option value="">Benefício 1</option>
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
      <button type="submit" class="btn btn-primary alignRight">Submit</button>
      <span class="btn"></span>
    </form>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid painelForm">

    <div class="panel-group" id="accordion" style="margin-top: -50px;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
              Quantidade de benefícios no semestre
              <span class="glyphicon glyphicon-chevron-down">
            </a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="textMes">Jan</span> </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="textMes">Fev</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="textMes">Mar</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span class="textMes">Abr</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span class="textMes">Mai</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span class="textMes">Jun</span></div>
            </div>            
          </div>
          <button type="button" class="btn btn-success">Success</button>
        </div>
        </div>
    </div>

    <div class="well"><h3>Gastos anuais com benefícios da previdência</h3></div>

  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading1">
          <span id="iconDin" class="glyphicon glyphicon-list-alt"></span>
        </div>
        <div class="panel-body">
          <h3>Benefícios recebidos</h3>
        </div>
        <div class="panel-footer">
          <h3>1.200.578</h3>
          <h4>Por mês</h4>
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
          <h3>Gatos totais</h3>
        </div>
        <div class="panel-footer">
          <h3>R$ 9.298,87</h3>
          <h4>Por mês</h4>
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
          <h3>Pessoas beneficiadas</h3>
        </div>
        <div class="panel-footer">
          <h3>2.545.557</h3>
          <h4>Pessoas com benefícios</h4>
        </div>
      </div>      
    </div>    
  </div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
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
