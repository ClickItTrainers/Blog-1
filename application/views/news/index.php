
<br/><br/><br/>
<nav class="navbar navbar-inverse navbar-fixed-top">
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
              echo ' Bienvenido de nuevo <strong>'.$this->session->userdata("user").'</strong>';
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
            echo  '<a href="login/registro" class="btn btn-info" role="button">Registro</a>';
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
    <div class="jumbotron" style="background-image: url(http://st.depositphotos.com/1032463/1373/i/950/depositphotos_13732950-Background-of-old-vintage-newspapers.jpg); background-size: 100%;">
      <div class="container">
        <h1><kbd>News!</kbd></h1>
        <p><kbd>The most recent news.</kbd></p>
      </div>
    </div>


    <?php foreach ($news as $news_item):
      {
        $mostrar = substr ($news_item['text'], 0, 200);

      }?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 post">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>
                                    <strong><a href="<?php echo site_url('news/'.$news_item['slug']); ?>" class="post-title"><?php echo $news_item['title']; ?></a></strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 post-header-line">
                                <span class="glyphicon glyphicon-user"></span> by <a href="#"><?php echo $news_item['autor']?></a> | <span class="glyphicon glyphicon-calendar">
                                </span> Sept 16th, 2012 |
                            </div>
                        </div>
                        <div class="row post-content">

                            <div class="col-md-12">
                                <p>
                                    <?php echo $mostrar."..."; ?>
                                </p>
                                <p>
                                  <p><a class="btn btn-default" href="<?php echo site_url('news/'.$news_item['slug']); ?>" role="button">Ver mas &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery.min.js"><\/script>')</script>
