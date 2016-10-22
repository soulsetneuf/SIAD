<?php
  $datos=$persona->result_array()[0];
    function CalculaEdad( $fecha ) {
        list($Y,$m,$d) = explode("-",$fecha);
        return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }
?>

<secction class="col-lg-8 connectedSortable ui-sortable">

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Datos de registro</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Centro de acojida</label>

                    <div class="col-sm-10">
                        <select name="t_cenAcogida" id="t_cenAcogida" style="width:150px">
                            <option value=""></option>
                            <option value="1">NI&ntilde;O DE PRAGA</option>
                            <option value="2">10 DE NOVIEMBRE</option>
                            <option value="3">MARIANO BENJAMIN ARRUETA</option>
                            <option value="4">MUSUQ WASINCHIJ - STA. LUCIA</option>
                            <option value="5">SANTIAGO MESTRIO -  CAIZA "D"</option>
                            <option value="6">MARGARITA AUGER - UNCIA </option>
                            <option value="7">MIRAFLORES - UNCIA</option>
                            <option value="8">AURORA JUAREZ DE OPORTO - UYUNI</option>
                            <option value="9">MARIA INMACULADA - TUPIZA</option>
                            <option value="33">EJ&Eacute;RCITO DE SALVACI&Oacute;N</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">A solicitud de</label>

                    <div class="col-sm-10">
                        <select name="t_solicitud" id="t_solicitud" style="width:120px" onchange="cambiar_otros()">
                            <option value=""></option>
                            <option value="1">DEFENSORIA</option>
                            <option value="2">FISCALIA</option>
                            <option value="3">POLICIA</option>
                            <option value="4">OTROS</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Apellido Paterno</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Apellido Paterno"
                               value="<?php echo $persona->result_array()[0]['persona_app_pat'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Apellido Materno</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Apellido Materno"
                               value="<?php echo $persona->result_array()[0]['persona_app_mat'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">sexo</label>
                    <div class="col-sm-10">
                        <?php
                        if($datos['persona_sexo']==1){
                            echo 'M <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">';
                            echo 'F <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">';
                        }
                        else{
                            echo 'M <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" >';
                            echo 'F <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked="">';
                        }
                        ?>
                    </div>
                </div>


            </div>
            <!-- /.box-body -->
        </form>
    </div>

</secction>
<div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-yellow">
            <div class="widget-user-image">
                <img class="img-circle" src="<?= base_url() ?>plantilla/dist/img/user7-128x128.jpg" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username"><?php echo $datos['persona_nombres']." ".$datos['persona_app_pat']." ".$datos['persona_app_mat']; ?></h3>

        </div>
        <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
                <li><a href="#">Edad <span class="pull-right badge bg-blue">31 A&ntilde;os</span></a></li>
                <li><a href="#">Sexo
                        <span class="pull-right badge bg-aqua">
                            <?php
                            if($datos['persona_sexo']==1){
                                echo 'Masculino';
                            }
                            else{
                                echo 'Femenino';
                            }
                            ?>
                        </span></a></li>
                <li><a href="#">Fecha de nacimiento <span class="pull-right badge bg-green"><?php echo $datos['persona_fecha_nac'];?></span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
            </ul>
        </div>
    </div>
    <!-- /.widget-user -->
</div>


