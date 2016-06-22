
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="news">
            <?php
            if($this->session->userdata('user')===null)
            {
              echo '<span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>';
              echo ' Bienvenido a mi blog</a>';

            }
            else {
              echo '<span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>';
              echo ' Bienvenido '.$this->session->userdata("user");
              echo '</a>';
            }
            ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right">
        <?php
        {
          if($this->session->userdata('user')===null)
          {
            echo  '<a href="login" class="btn btn-success" role="button">Iniciar Sesión</a>   ';
            echo  '<a href="news/registro" class="btn btn-info" role="button">Registro</a>';
          }
          else {
            echo  '<a href="login/salir" class="btn btn-danger" role="button">Cerrar Sesion</a>   ';
            echo  '<a href="news/create" class="btn btn-success" role="button">Crear nota</a>';
          }
      }?>
      </form>
      <form class="navbar-form navbar-left">
      </form>
      </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Blog de noticias</h1>
        <p>Las noticias mas recientes las verás solo aqui.</p>
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <?php foreach ($news as $news_item):
        {
          $mostrar = substr ($news_item['text'], 0, 200);
          $mostrar2 = substr ($news_item['title'], 0, 20);
        }?>
            <div class="col-md-4">
              <h2><?php echo $mostrar2; ?></h2>
              <div class="main">
                      <?php echo $mostrar."[...]"; ?>
              </div>

              <p><a class="btn btn-default" href="<?php echo site_url('news/'.$news_item['slug']); ?>" role="button">Ver mas &raquo;</a></p>
            </div>
      <?php endforeach; ?>
      </div>
      <hr>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
