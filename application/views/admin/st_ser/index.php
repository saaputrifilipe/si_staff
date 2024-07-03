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
                                        <th>Id salariu</th>
                                        <th>Naran </th>
                                        <th>Tinan servisu</th>
                                        <th>Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <?php $no=1; foreach ($st_ser as $key => $value) { ?>
                                            
                                        </tr>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->id_salariu ?></td>
                                            <td><?= $value->naran ?></td>
                                            <td><?= $value->tinan_servisu ?></td>
                                            <td>
                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_st_servisu?>"><i class="fa fa-pencil"></i></button>
                                                <a href="<?= base_url('st_ser/delete/'.$value->id_st_servisu) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
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

                                                <?php echo form_open('st_servisu/add');?>

                                                <div class="form-group">
                                                    <label>Id salariu</label>
                                                    <input class="form-control" type="text" name="id_salariu" placeholder="Id salariu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Naran</label>
                                                    <input class="form-control" type="text" name="naran" placeholder="naran" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tinan servisu</label>
                                                    <input class="form-control" type="text" name="tinan_servisu" placeholder="tinan_servisu" required>
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
                                    <?php foreach ($st_ser as $key => $value) { ?>
                        <div class="modal fade" id="edit<?= $value->id_kategoria ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Hadia Dados </h4>
                                                </div>
                                                <div class="modal-body">
                                                <?php echo form_open('st_ser/edit');?>

                                                <div class="form-group">
                                                    <label>Id salariu</label>
                                                    <input class="form-control" type="text" name="id_salariu" value="<?= $value->id_salariu?>" placeholder="Id salariu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Naran</label>
                                                    <input class="form-control" type="text" name="naran" value="<?= $value->naran?>" placeholder="Naran" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tinan servisu</label>
                                                    <input class="form-control" type="text" name="tinan_servisu" value="<?= $value->tinan_servisu?>" placeholder="Tinan servisu" required>
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                            <?php }?>

                        