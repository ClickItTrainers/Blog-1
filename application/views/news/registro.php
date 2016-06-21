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
        <span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>
        Bienvenido a mi blog</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <form class="navbar-form navbar-right">
    <?php
    {
      if($this->session->userdata('user')===null)
      {
        echo  '<a href="../login" class="btn btn-success" role="button">Iniciar Sesión</a>   ';
      }
      else {
        redirect('news');
      }
  }?>
  </form>
  <form class="navbar-form navbar-left">
  </form>
  </div><!--/.navbar-collapse -->
  </div>
</nav>


<div class="container">
<div class="row">
<div class="col m12">
<div class="card-panel   green ">
</div>
<center>
<h1>Registro de usuarios</h1>
</center>

<?php echo form_open(base_url().'news/registro' ); ?><div class="form-group">
 <label for="username">Nombre de usuario</label>
 <input type="text" class="form-control" id="username" required name="username" placeholder="Nombre de usuario">
</div><div class="form-group">
 <label for="password">Contrase&ntilde;a</label>
 <input type="password" class="form-control" id="password" required name="password" placeholder="Contrase&ntilde;a">
</div><div class="form-group">
 <label for="email">Correo Electronico</label>
 <input type="email" class="form-control" id="mail" name="mail"  required placeholder="Correo Electronico">
</div><!--<button type="submit" class="btn btn-default">Registrar</button>-->
<center>
<button class="btn btn-lg btn-primary btn-success" name="nbuton" type="submit">Registro</button>
<a href="../news" class="btn btn-lg btn-primary btn-danger" name="back" type="cancel">Regresar</a>
</center>
<!--ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd-->
<div class="row">
<div class="col-md-12"><?php echo validation_errors(); ?>
</div>
</div><!--close mamada-->
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>
