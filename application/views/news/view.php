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
        echo  '<a href="../login/registro" class="btn btn-info" role="button">Registro</a>';
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
<div class="row">
    <div class="col-md-1"></div>
	<div class="col-md-10">
		<div id="postlist">
    		<div class="panel">
                <div class="panel-heading">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3 class="pull-left"></h3>
                            </div>
                        </div>
                    </div>
                    <h1><?php echo $news_item['title'];?> </h1>
                </div>

            <div class="panel-body">
                <?php echo $news_item['text']; ?>

<br/><a class="btn btn-warning" href="<?php echo base_url();?>news" role="button">Volver &raquo;</a>
            </div>

            <div class="panel-footer">
                Autor: <span class="label label-danger"><?php echo $news_item['autor'];?></span>
            </div>
        </div>

        <?php
        if($this->session->userdata('user')===null)
        {
            echo '<div class="alert alert-danger">';
            echo '<center><strong>Inicia sesión para dejarnos tus comentarios!.</strong></center>';
            echo '</div></div></div>';
        }
        else
        {
            echo validation_errors();
            echo form_open(base_url().'news/comment');
            echo '</div><div class="alert alert-success">';
            echo '<center><strong>Dejanos tu opinion en la caja de comentarios de abajo!.</strong></center>';
            echo '<input type="hidden" name="slug" value='.$news_item["slug"].'>';
            echo '</div></div>';
            echo '<center><textarea name="comment" required style="resize: none; width: 80%;height:20%;" rows="10"></textarea><br/><br/>';
            echo '<input type="submit" class="btn btn-success" name="submit" value="Enviar"></center><br>';
				}
?>
<center><h2>Comentarios <span class="glyphicon glyphicon-comment"></span></h2></center>
<?php foreach ($comments as $comments_item):

  if(strcmp($news_item["slug"], $comments_item['slug']) === 0)
  {
  ?>
    <div class="container">
    <div class="col-lg-10 col-lg-offset-1 col-sm-8 text-left">
    <div class="well">
        <strong class="pull-left primary-font"><?php echo $comments_item['autor'];?> <span class="glyphicon glyphicon-user"> </strong>
        <small class="pull-right text-muted">
           <span class="glyphicon glyphicon-time"></span> mins ago</small>
        </br>
        <p class="ui-state-default"><?php echo $comments_item['comment'];?></li>
        </br>
    </div>
</div>
</div>
<?php } endforeach; ?>
