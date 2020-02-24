<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="#">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> EventUp</b>
        </a>
        <ul class="navbar-nav mx-auto">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventModal">
          Skapa Event </button>
        <!-- Php Code To Create Events With A Modal --> <? include 'createEvent.php'; ?>
        </ul>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
        Login </button> 
        <!-- Php Code To Login With A Modal --> <? include 'login.php'; ?>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#registerModal">
        Registrera </button> 
        <!-- Php Code To Register With A Modal --><? include'register.php'; ?>
      </div>
    </div>
  </nav>
  <div class="py-5 d-flex" style="	background-image: url(&quot;https://images.unsplash.com/photo-1579239314215-7436539448b6?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjExMDk0fQ&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80&quot;);	background-position: center;	background-size: 100%;	background-repeat: repeat;">
    <div class="container w-25" style="	max-width: 15%;	min-width: 10%;">
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group" style="width: 100%;">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Kategorier<br></button>
            <div class="dropdown-menu"> <a class="dropdown-item" href="#">ALLA<br></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">PARTY</a>
              <a class="dropdown-item" href="#">MUSIC</a><a class="dropdown-item" href="#">FIKA</a><a class="dropdown-item" href="#">ANIME</a><a class="dropdown-item" href="#">GAMING<br></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-flex">
      <div class="row flex-grow-0" style="">
        <div class="col-md-11" style="">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">MALMÖ: Dropin Party! BBQ&nbsp;<span class="badge badge-pill badge-primary"></span><span class="badge badge-pill badge-primary">25 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">LUND: Cosplay Convention&nbsp;<span class="badge badge-pill badge-primary"></span><span class="badge badge-pill badge-primary">634 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
          </ul>
        </div>
      </div>
      <div class="row" style="">
        <div class="col-md-11" style="">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">MALMÖ: Dropin Party! BBQ&nbsp;<span class="badge badge-pill badge-primary"></span><span class="badge badge-pill badge-primary">25 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">LUND: Cosplay Convention&nbsp;<span class="badge badge-pill badge-primary"></span><span class="badge badge-pill badge-primary">634 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="">HELSINGBORG: Tabeltop Tournament! WARHAMMER&nbsp;<span class="badge badge-pill badge-primary">159 Deltagare</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>