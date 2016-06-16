
    <nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a href="#" class="btn btn-success" role="button">Iniciar Sesión</a>
            <a href="#" class="btn btn-info" role="button">Registro</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Blog de Mena!</h1>
        <p>Blog de noticias.</p>
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->

      <div class="row">
      <?php foreach ($news as $news_item): ?>
            <div class="col-md-4">
              <h2><?php echo $news_item['title']; ?></h2>
              <div class="main">
                      <?php echo $news_item['text']; ?>
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
