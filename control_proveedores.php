            <!-- AQUI VA EL FOOTER -->
            <?php 
                include("includes/head.php");
                include('conexion.php');
            ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

                    <!-- AQUI VA EL FOOTER -->
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
                    <h1 class="h3 mb-4 text-gray-800"><i class="bi bi-person-lines-fill"></i> Catalogo de Proveedores</h1>
                    <p class="mb-4">Sistema de integración y administracin de Productos <a target="_blank"
                            href="https://datatables.net">Soporte tecnico</a>.</p>

                </div>
                <!-- /.container-fluid -->

                <!-- MOSTRAR TABLA -->

                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <!-- INICIO DE MODAL -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingresar Nuevo Proveedor</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Proveedor</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="proveedores/create_proveedor.php" method="POST">

                                        <div class="mb-3">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" require>
                                        </div>

                                        <div class="mb-3">
                                            <label for="telefono">Telefono</label>
                                            <input type="text" name="telefono" class="form-control" require>
                                        </div>

                                        <div class="mb-3">
                                            <label for="direccion">Dirección</label>
                                            <input type="text" name="direccion" class="form-control" require>
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
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_proveedor</th>
                                            <th>Nombre Proveedor</th>
                                            <th>Telefono</th>
                                            <th>Dirección</th>
                                            <th>Operación</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>id_proveedor</th>
                                            <th>Nombre Proveedor</th>
                                            <th>Telefono</th>
                                            <th>Dirección</th>
                                            <th>Operación</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php include("proveedores/select_table_proveedores.php")?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- End of Main Content -->

                        <!-- AQUI VA EL FOOTER -->
                        <?php include("includes/footer.php")?>