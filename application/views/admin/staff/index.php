                        <div class="row" >
                        <div class="col-lg-100 col-md-100">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Aumenta </button>
                                </div>
                                <div class="panel-body" style="height: 100%; overflow-y: auto;"> 

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 15%;">Id user</th>
                                        <th style="width: 10%;">Naran staff</th>
                                        <th style="width: 15%;">Sexo</th>
                                        <th style="width: 10%;">Data moris</th>
                                        <th style="width: 15%;">Hela fatin</th>
                                        <th style="width: 5%;">No.telefone</th>
                                        <th style="width: 10%;">Nivel estudu</th>
                                        

                                        <th style="width: 10%;">Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($staff as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->id_user ?></td>
                                            <td><?= $value->naran_staff ?></td>
                                            <td><?= $value->sexo?></td>
                                            <td><?= $value->data_moris ?></td>
                                            <td><?= $value->hela_fatin ?></td>
                                            <td><?= $value->no_telefone ?></td>
                                            <td><?= $value->nivel_estudu ?></td>
                                  

                                            <td>
                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php $value->id_staff?>"><i class="fa fa-pencil"></i></button>
                                            <a href="<?= base_url('staff/delete/'.$value->id_staff) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                   
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>


                        <!-- Modal Aummenta -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Aumenta Dados </h4>
                                                </div>
                                                <div class="modal-body">

                                                <?php 

                                                    if ($this->session->flashdata('mensajen')){
                                                        echo '<div class="alert alert-success alert-dismissible">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                                            echo $this->session->flashdata('mensajen');
                                                        echo '</div>';
                                                }
                                                
                                                
                                                ?>

                                                <?php echo form_open('staff/add');?>

                                                <div class="form-group">
                                                    <label>Id User</label>
                                                    <input class="form-control" type="text" name="id_user" placeholder="Id user" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Naran staff</label>
                                                    <input class="form-control" type="text" name="naran_staff" placeholder="Naran staff" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Sexo</label>
                                                    <input class="form-control" type="text" name="sexo" placeholder="Sexo" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Data moris</label>
                                                    <input class="form-control" type="text" name="data_moris" placeholder="Data moris" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Hela fatin</label>
                                                    <input class="form-control" type="text" name="hela_fatin" placeholder="Hela fatin" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>No.telefone</label>
                                                    <input class="form-control" type="text" name="no_telefone" placeholder="No.telefone" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nivel estudu</label>
                                                    <input class="form-control" type="text" name="nivel_estudu" placeholder="Nivel estudu" required>
                                                </div>

                                                

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kansela</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->

                                    <!-- Modal Edit -->
                                    <?php foreach ($staff as $key => $value) { ?>
                        <div class="modal fade" id="edit<?php $value->id_staff?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Hadia Dados </h4>
                                                </div>
                                                <div class="modal-body">
                                                <?php echo form_open('staff/edit');?>

                                                <div class="form-group">
                                                    <label>Id User</label>
                                                    <input class="form-control" type="text" name="id_user" placeholder="Id user" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Naran staff</label>
                                                    <input class="form-control" type="text" name="naran_staff" placeholder="Naran staff" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Sexo</label>
                                                    <input class="form-control" type="text" name="sexo" placeholder="Sexo" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Data moris</label>
                                                    <input class="form-control" type="text" name="data_moris" placeholder="Data moris" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Hela fatin</label>
                                                    <input class="form-control" type="text" name="hela_fatin" placeholder="Hela fatin" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>No.telefone</label>
                                                    <input class="form-control" type="text" name="no_telefone" placeholder="No.telefone" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nivel estudu</label>
                                                    <input class="form-control" type="text" name="nivel_estudu" placeholder="Nivel estudu" required>
                                                </div>

                                               

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                    </div>
                                    </div>
                                            <?php }?>