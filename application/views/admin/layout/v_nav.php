 <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <h3>SI staff-MCAS</h3>
                            <li>
                                <a href="<?= base_url('admin')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> Dados<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('staff')?>"><i class="fa fa-table fa-fw"></i>Staff</a>
                            </li>
                            <li>
                                <a href="<?= base_url('departamentu')?>"><i class="fa fa-table fa-fw"></i> Departamentu</a>
                            </li>

                            <li>
                                <a href="<?= base_url('salariu')?>"><i class="fa fa-table fa-fw"></i> Salariu</a>
                            </li>

                            <li>
                                <a href="<?= base_url('st_servisu')?>"><i class="fa fa-table fa-fw"></i> St.servisu</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Kargu')?>"><i class="fa fa-table fa-fw"></i> Kargu</a>
                            </li>
                            
                           
                                <!-- /.nav-second-level -->
                            </li>
                           
                            <li class="active">
                                <a href="<?=base_url('login/logout')?>"><i class="fa fa-sign-out"></i>Logout</a>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?= $title2?></h1>
                        