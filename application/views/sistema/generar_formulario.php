<secction <?php echo $columnas; ?>>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?php echo $titulo; ?>
        </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">
<?php
 foreach ($cabeceras as $value)
 {
?>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $value["nombre"]; ?></label>

                <div class="col-sm-10">
                    <input type="<?php echo $value["tipo"]; ?>" class="form-control" id="inputEmail3" placeholder="<?php echo $value["nombre"]; ?>">
                </div>
            </div>
     <?php
    }
    ?>
        </div>
        <!-- /.box-body -->
    </form>
</div>

</secction>