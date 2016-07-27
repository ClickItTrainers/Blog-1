
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
           if($this->session->userdata('user')!=null)
           {
             redirect('news');
           }
           ?>
           <a href="<?php echo base_url();?>login/registro" class="btn btn-info" role="button">Registro</a>
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
          echo form_open(base_url()."login/index", $attributes);?>
          <fieldset>
               <legend>Inicia sesión</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-4">
                    <label for="txt_username" class="control-label">Usuario</label>
               </div>
               <div class="col-lg-7 col-sm-8">
               <input class="form-control" id="txt_username" required name="txt_username" placeholder="Usuario" type="text" onkeypress="return validar(event)" value="<?php echo set_value('txt_username'); ?>" />
               </div>
               </div>
               </div>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-4">
               <label for="txt_password" class="control-label">Contraseña</label>
               </div>
               <div class="col-lg-7 col-sm-8">
                    <input class="form-control" id="txt_password" required name="txt_password" placeholder="Contraseña" type="password" onkeypress="return validar(event)" value="<?php echo set_value('txt_password'); ?>" />
               </div>
               </div>
             </div>
               <div class="form-group">
               <div class="col-lg-12 col-sm-3 text-center">
                    <input id="btn_login" name="btn_login"  type="submit" class="btn btn-default" value="Iniciar Sesión" />
                    <a href="<?php echo base_url();?>.news" class="btn btn-default">Regresar</a>
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
</div>
<center>
