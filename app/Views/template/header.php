<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Google Fonts  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/5d7c26c4ce.js" crossorigin="anonymous"></script>
<!-- Top Icon -->
<!-- <i class="fa-solid fa-car-garage"></i> -->
<title>Loja de Veículos</title>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="home" style="color: #FFF">Loja de Carros</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="sobre" style="color: #FFF">Sobre <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produto" style="color: #FFF">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato" style="color: #FFF">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login" style="color: #FFF">Login</a>
      </li>   
      <?php
      $session = \Config\Services::session();
        if($session->get('logado')) {
          
      ?>
      <li class="nav-item">
        <a class="nav-link" href="sair" style="color: #FFF">Sair</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="cadastro-pessoas" style="color: #FFF">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pessoa" style="color: #FFF">Listar Cadastros Pessoas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro-veiculos" style="color: #FFF">Cadastro de Carros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carro" style="color: #FFF">Listar Cadastros Carros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro-motos" style="color: #FFF">Cadastro de Motos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="moto" style="color: #FFF">Listar Cadastros Motos</a>
      </li>
        <?php
          }
        ?>
    </ul>
  </div>
</nav>