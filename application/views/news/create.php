<center><h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Titulo</label><br />
    <input type="input" name="title" /><br /><br/>

    <label for="text">Texto</label><br />
    <textarea name="text"></textarea><br/>

    <input type="submit" name="submit" value="Enviar"/><br />
    <br /><a href="../news">Regresar</a><br/>

</form>
</center>
