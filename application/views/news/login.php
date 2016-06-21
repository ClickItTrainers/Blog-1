<br><br>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
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
           <a class="navbar-brand" href="../news">
             <span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>
             Bienvenido a mi blog</a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <form class="navbar-form navbar-right">
           <a href="news/registro" class="btn btn-info" role="button">Registro</a>
         </form>
       </div><!--/.navbar-collapse -->
     </div>
   </nav>
<hr/>
<center>
<div class="container">
     <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <?php
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>
          <fieldset>
               <legend>Inicia sesión</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-4">
                    <label for="txt_username" class="control-label">Usuario</label>
               </div>
               <div class="col-lg-7 col-sm-8">
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Usuario" type="text" value="<?php echo set_value('txt_username'); ?>" />
                    <span class="text-info"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-4">
               <label for="txt_password" class="control-label">Contraseña</label>
               </div>
               <div class="col-lg-7 col-sm-8">
                    <input class="form-control" id="txt_password" name="txt_password" placeholder="Contraseña" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-info"><?php echo form_error('txt_password'); ?></span>
               </div>
               </div>
             </div>
               <div class="form-group">
               <div class="col-lg-12 col-sm-3 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <a href="../news" class="btn btn-default">Regresar</a>
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
</div>
<center>
