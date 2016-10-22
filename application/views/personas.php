    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Adulto Mayor</h3>
            </div>
            <!-- /.box-header -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><?php $cabecera ?>asdfasdf</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  foreach($personas->result_array() as $persona)
                  {?>
                    <tr>
                      <td>
                      <?= 
                       $persona['nombre']
                      ?>
                      </td>
                    </tr>
                  <?php
                  }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   </div>
</div>