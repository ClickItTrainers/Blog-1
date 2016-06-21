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
      <span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>
      Bienvenido <?=$this->session->userdata("user");?>
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <form class="navbar-form navbar-right">
    <?php
    {
      if($this->session->userdata('user')===null)
      {
        redirect('news/registro');
      }
      else {
        echo  '<a href="../login/salir" class="btn btn-info" role="button">Cerrar Sesion</a>   ';
      }
  }?>
  </form>
  <form class="navbar-form navbar-left">
  </form>
  </div><!--/.navbar-collapse -->
  </div>
</nav>
<center><h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
    <label for="title">Titulo</label><br />
    <input type="input"style="width: 70%" name="title" /><br /><br/>

    <label for="text">Texto</label><br />
    <div class="row">
    <textarea name="text" style="width: 70%; height: 40%" rows="10"></textarea><br/><br/>
    <input type="submit" class="btn btn-success" name="submit" value="Enviar"/>
    <a href="../news" class="btn btn-danger">Regresar</a><br/>
</div>
</form>
</center>
