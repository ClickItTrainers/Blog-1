
<script type="text/javascript">
function validar(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[<>'']/;
    te = String.fromCharCode(tecla);
    return !patron.test(te);
}
</script>
<br/><br/><br/><br/>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>news">
        <span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>
        Bienvenido a mi blog</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <form class="navbar-form navbar-right">
    <?php
    {
      if($this->session->userdata('user')===null)
      {
        echo  '<a href="'.base_url().'login" class="btn btn-success" role="button">Iniciar Sesión</a>   ';
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

<br><br><br>

<center>
<div class="container">
     <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <?php
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open(base_url().'login/registro', $attributes); ?>
          <fieldset>
               <legend>Registrar nuevo </legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-4">
                    <label for="username" class="control-label">Usuario</label>
               </div>
               <div class="col-lg-7 col-sm-8">
                    <input class="form-control" id="username" required name="username" placeholder="Usuario" onkeypress="return validar(event)" type="text" value="<?php echo set_value('txt_username'); ?>" />
               </div>
               </div>
               </div>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-4">
               <label for="password" class="control-label">Contraseña</label>
               </div>
               <div class="col-lg-7 col-sm-8">
                    <input class="form-control" id="password" required name="password" onkeypress="return validar(event)" placeholder="Contraseña" type="password" value="<?php echo set_value('txt_password'); ?>" />
               </div>
               </div>
               </div>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-4">
                    <label for="mail" class="control-label">Email</label>
               </div>
               <div class="col-lg-7 col-sm-8">
                    <input class="form-control" id="mail" required name="mail" placeholder="example@domain.com" onkeypress="return validar(event)" type="email" value="<?php echo set_value('txt_username');?>"/>
               </div>
               </div>
               </div>
               <div class="form-group">
               <div class="col-lg-12 col-sm-3 text-center">
                    <input id="btn_login" name="nbuton"  type="submit" class="btn btn-default" value="Registrar" />
                    <a href="<?php echo base_url();?>.news" class="btn btn-default">Regresar</a>
               </div>
               </div>
          </fieldset>
          <?php echo validation_errors(); ?>
          <?php echo form_close(); ?>

          </div>
     </div>
</div>
<center>
