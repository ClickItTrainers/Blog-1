<br/><br/><br/>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../news">
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
        echo  '<a href="../login" class="btn btn-success" role="button">Iniciar Sesión</a>   ';
        echo  '<a href="../news/registro" class="btn btn-info" role="button">Registro</a>';
      }
      else {
        echo  '<a href="../login/salir" class="btn btn-danger" role="button">Cerrar Sesion</a>   ';
        echo  '<a href="../news/create" class="btn btn-success" role="button">Crear nota</a>';
      }
  }?>
  </form>
  <form class="navbar-form navbar-left">
  </form>
  </div><!--/.navbar-collapse -->
  </div>
</nav>
<div class="container">
  <div class="jumbotron">
<?php
echo '<h1>'.$news_item['title'].'</h1>';
echo '<p>'.$news_item['text'].'<p>';
echo 'Nota escrita por: '.$news_item['autor'];
echo '<br/><a href="../news">Volver a la página de inicio</a><br/>';
if($this->session->userdata('user')===null)
{
    echo '</div><div class="alert alert-info">';
    echo '<center><strong>Inicia sesión para dejarnos tus comentarios!.</strong></center>';
    echo '</div></div>';
}
else
  {
    echo '</div><div class="alert alert-info">';
    echo '<center><strong>Dejanos tu opinion en la caja de comentarios de abajo!.</strong></center>';
    echo '</div></div>';
    echo '<center><textarea name="text" style="width: 50%; height: 20%" rows="10"></textarea><br/><br/>';
    echo '<a href="#" class="btn btn-info" role="button">Enviar</a></center><br>';
  }
?>
