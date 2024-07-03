<div class="row" >
                        <div class="col-lg-40 col-md-40">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Aumenta </button>
                                </div>
                                <div class="panel-body col-lg-40 col-md-40 ">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead style="text-align: center;">
                                    <tr>
                                        <th>No</th>
                                        <th>Naran departamentu</th>
                                        <th>Id St.staff</th>
                                        
                                        <th>Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <?php $no=1; foreach ($depart as $key => $value) { ?>
                                            
                                        </tr>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->naran_departamentu ?></td>
                                            <td><?= $value->id_st_staff?></td>
                                            
                                            <td>
                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_departamentu?>"><i class="fa fa-pencil"></i></button>
                                            <a href="<?= base_url('depart/delete/'.$value->id_departamentu) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
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

                                                <?php echo form_open('depart/add');?>

                                                <div class="form-group">
                                                    <label>Naran departamentu</label>
                                                    <input class="form-control" type="text" name="naran_departamentu" placeholder="naran_departamentu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Id St.staff</label>
                                                    <input class="form-control" type="text" name="id_st_staff" placeholder="Id St.staff" required>
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

<!-- 
                                    Modal Edit -->
                                    <?php foreach ($depart as $key => $value) { ?>
                         <div class="modal fade" id="edit<?= $value->id_departamentu?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Aumenta Dados </h4>
                                                </div>
                                                <div class="modal-body">

                                                <?php echo form_open('depart/edit');?>

                                                <div class="form-group">
                                                    <label>Naran departamentu</label>
                                                    <input class="form-control" type="text" name="naran_departamentu" value="naran_departamentu" placeholder="naran_departamentu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Id st.staff</label>
                                                    <input class="form-control" type="text" name="id_st_staff" value="Id st.staff" placeholder="Id kargu" required>
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
                                    <?php } ?>