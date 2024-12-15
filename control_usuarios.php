<?php 
include("includes/head.php");
include('conexion.php');
?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- AQUI VA EL SIDEBAR -->
         <?php include("includes/sidebar.php")?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- AQUI VA EL TOPBAR -->
                <?php include("includes/topbar.php")?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class="fa-solid fa-user-tie"></i> Control De Usuarios</h1>
                    <p class="mb-4">Sistema de integración y administracin de usuarios <a target="_blank"
                            href="https://datatables.net">Soporte tecnico</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registro de usuarios activos</h6>
                            
                            <!-- INICIO DE MODAL -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingresar nuevo usuario</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar usuarios</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="control_usuarios/create_usuarios.php" method="POST">
                                        <div class="mb-3">
                                        <label for="name">Correo electrònico</label>
                                        <input type="email" name="email" class="form-control" require>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password">Contraseña</label>
                                        <input type="text" name="password" class="form-control" require>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone">Teléfono</label>
                                        <input type="number" name="phone" class="form-control" require>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Agregar</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            <!-- FIN DEL MODAL -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php include("consultas/select_table.php")?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          <!-- AQUI VA EL FOOTER -->
          <?php include("includes/footer.php")?>