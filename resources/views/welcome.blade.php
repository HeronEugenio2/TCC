<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>LaCasa - Beta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap get -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
        <img title="profile image" class="img-circle img-responsive" src="http://i64.tinypic.com/10r93ww.png" height="200" width="200">
          <h1 class="masthead-heading mb-0">One Page Wonder</h1>
          <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off </h2>
          <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="https://pixel.nymag.com/imgs/daily/vulture/2015/09/15/15-variety-shows.w700.h700.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">LaParty !</h2>
              <p>Fique ligado e marque presença nos eventos gerenciados pelas repúblicas de sua região.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="https://i.pinimg.com/originals/14/f2/94/14f294379f49278ea7f6cc94f89db0fe.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Desapega</h2>
              <p>Está procurando por móveis usados para completar sua casa ou tentando se livrar de algo que já não te serve mais? basta fazer sua oferta e selecionar à quem vender...</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="http://coolideasmarketing.com/wp-content/uploads/2017/11/5-Tips-To-The-Perfect-Instagram-Post.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">IntegraCasa </h2>
              <p>Faça integração do perfil de sua república com instagram e facebook para manter seus amigos sempre ligados.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="http://fluxoconsultoria.poli.ufrj.br/wp-content/uploads/2015/10/processos_editada-e1458313505891.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">ControlP</h2>
              <p>Mantenha o controle de gastos e gerencie tarefas para os membros de seua república de maneira fácil e eficiente.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; LaCasa 2018 <img title="profile image" class="img-circle img-responsive" src="http://i64.tinypic.com/10r93ww.png" height="50" width="50"></p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
