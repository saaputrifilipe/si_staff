<div class="row" >
                        <div class="col-lg-40 col-md-40">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Aumenta </button>
                                </div>
                                <div class="panel-body col-lg-40 col-md-40 ">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Naran Kargu</th>
                                        <th>Id departamentu</th>
                                        <th>Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <?php $no=1; foreach ($kar as $key => $value) { ?>
                                            
                                        
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->naran_kargu ?></td>
                                            <td><?= $value->id_departamentu ?></td>
                                            <td>
                                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php $value->id_kargu?>"><i class="fa fa-pencil"></i></button>
                                                <a href="<?= base_url('kar/delete/'.$value->id_kargu) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
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

                                                <?php echo form_open('kar/add');?>

                                                <div class="form-group">
                                                    <label>Naran kargu</label>
                                                    <input class="form-control" type="text" name="naran_kargu" placeholder="Naran Kargu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Id departamentu</label>
                                                    <input class="form-control" type="text" name="id_departamentu" placeholder="Id departamentu" required>
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




                    <!-- Modal Aummenta Edit-->
                    <?php foreach ($kar as $key => $value) { ?>
                    <div class="modal fade" id="edit<?php $value->id_kar ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Dados kargu</h4>
                                                </div>
                                                <div class="modal-body">

                                                <?php echo form_open('kar/edit'.$value->id_kliente);?>

                                                <div class="form-group">
                                                    <label>Naran kargu</label>
                                                    <input class="form-control" type="text" name="naran_kargu" value="<?= $value->naran_kargu?>" placeholder="Naran kargu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Id departamentu</label>
                                                    <input class="form-control" type="text" name="id_departamentu" value="<?= $value->id_departamentu?>" placeholder="Id departamentu" required>
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kansela</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <?php } ?>