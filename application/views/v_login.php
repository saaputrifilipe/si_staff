
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SI_satff - <?= $title?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>template/back-end/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>template/back-end/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url() ?>template/back-end/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>template/back-end/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-image:url(<?= base_url() ?>template/front-end/images/jjj.jpg); background-repeat :cover">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default" style="background-image: url(<?= base_url() ?>template/front-end/images/jjj.jpg)"; border-radius: 20px; box-shadow: 4 4px 10px rgba(0,0,0,0.1);">
                        <div class="panel-heading" style="background-image: url(<?= base_url() ?>template/front-end/images/jjj.jpg)"; color: white; padding: 20px; text-align: center;">
                            <h3 class="panel-title" style="font-family: 'Arial Narrow Bold', sans-serif;"><?= $title?></h3>
                        </div>
                        <div class="panel-body" style="padding: 20px;">
                            <?php
                            echo form_open('login');

                            if ($this->session->flashdata('pesan')){
                               echo '<div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                    echo $this->session->flashdata('pesan');
                                echo '</div>';
                        }
                            ?>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="username" name="username" type="text" autofocus required style="margin-bottom: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required style="margin-bottom: 10px;">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                   <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-success" style="margin-right: 10px;">Login</button>
                                    <a  class="btn btn-success" href="<?= base_url()?>">Home</a> 
                                   </div>
                                </fieldset>
                            <? echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url() ?>template/back-end/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/startmin.js"></script>

    </body>
</html>
