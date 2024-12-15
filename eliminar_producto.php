            <!-- AQUI VA EL FOOTER -->
            <?php include("includes/head.php");
                  include('conexion.php');?>

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
                    <h1 class="h3 mb-4 text-gray-800"><i class="fa-solid fa-trash"></i> Eliminar Productos</h1>

                </div>
                <!-- /.container-fluid -->

            <!-- MOSTRAR TABLA -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_producto</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>cantidad</th>
                                            <th>Precio unitario</th>
                                            <th>Categoria</th>
                                            <th>Proveedor</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Estado</th>
                                            <th>Operacion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id_producto</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>cantidad</th>
                                            <th>Precio unitario</th>
                                            <th>Categoria</th>
                                            <th>Proveedor</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Estado</th>
                                            <th>Operacion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php include("control_invent/delete_table_inventario.php")?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- End of Main Content -->

                        <!-- AQUI VA EL FOOTER -->
                        <?php include("includes/footer.php")?>