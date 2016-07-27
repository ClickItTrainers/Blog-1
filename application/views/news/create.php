<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
  <script type="text/javascript">
function validar(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[<>'']/;
    te = String.fromCharCode(tecla);
    return !patron.test(te);
}
</script>
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
      <a class="navbar-brand" href="<?php echo base_url();?>news">
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
        redirect(base_url().'login/registro');
      }
      else
      {
        echo  '<a href="'.base_url().'login/salir" class="btn btn-danger" role="button">Cerrar Sesion</a>';
      }
  }?>
  </form>
  <form class="navbar-form navbar-left">
  </form>
  </div><!--/.navbar-collapse -->
  </div>
</nav>
<center><h2><?php echo $title; ?></h2>
<?php echo validation_errors();?>
<?php echo form_open(base_url().'news/create');?>
    <label for="title">Titulo</label><br />
    <input type="input"style="width: 70%" name="title" onkeypress="return validar(event)" /><br /><br/>
    <label for="text">Texto</label><br />
    <div class="row">
    <textarea name="text" style="width: 70%; height: 40%" rows="10" onkeypress="return validar(event)"></textarea><br/><br/>
    <input type="submit" class="btn btn-success" name="submit" value="Enviar"/>
    <a href="<?php echo base_url();?>news" class="btn btn-danger">Regresar</a><br/>
</div>
</form>
</center>
