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
                    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-store"></i> Nuevo Producto</h1>
                    <p class="mb-4">Sistema de integración y administracin de Productos <a target="_blank"
                            href="https://datatables.net">Soporte tecnico</a>.</p>

                </div>
                <!-- /.container-fluid -->

                <!-- MOSTRAR TABLA -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <!-- INICIO DE MODAL -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingresar Nuevo Producto</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="control_invent/create_inventario.php" method="POST">
                                        <div class="mb-3">
                                        <label for="producto">Producto</label>
                                        <input type="text" name="producto" class="form-control" require>
                                    </div>

                                    <div class="mb-3">
                                        <label for="descripcion">Descripción</label>
                                        <input type="text" name="descripcion" class="form-control" require>
                                    </div>

                                    <div class="mb-3">
                                        <label for="cantidad">Cantidad</label>
                                        <input type="number" name="cantidad" class="form-control" require>
                                    </div>

                                    <div class="mb-3">
                                        <label for="precio_u">Precio Unitario</label>
                                        <input type="number" step = "0.01" name="precio_unitario" class="form-control" require>
                                    </div>

                                    <div class="mb-3">
                                    <!--  INICIO DEL CATALOGO --> 
                                        <?php
                                            $query = "SELECT id_categoria, nombre_categoria FROM categorias";
                                            $result = $conn->query($query);

                                            if($result->num_rows > 0){
                                                echo '<label for="categoria">Categorias</label>';
                                                echo '<select name="categoria" class = "form-select">';
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option value="'.$row['id_categoria'].'">'.$row['nombre_categoria'].'</option>';
                                                }
                                                echo '</select>';
                                            }else{
                                                echo 'No hay categorias';
                                            }
                                        ?>
                                        <!--  FIN DEL CATALOGO-->
                                    </div>

                                    <div class="mb-3">
                                        <!--  INICIO DEL CATALOGO --> 
                                    <?php
                                            $query = "SELECT id_proveedor, nombre_proveedor FROM proveedores";
                                            $result = $conn->query($query);

                                            if($result->num_rows > 0){
                                                echo '<label for="proveedor">Proveedores</label>';
                                                echo '<select name="proveedor" class = "form-select">';
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option value="'.$row['id_proveedor'].'">'.$row['nombre_proveedor'].'</option>';
                                                }
                                                echo '</select>';
                                            }else{
                                                echo 'No hay proveedores';
                                            }
                                        ?>
                                        <!--  FIN DEL CATALOGO-->
                                    </div>      

                                    <div class="mb-3">
                                        <label for="estado">Estado</label>
                                        <select name="estado" class = "form-select">
                                            <option value="activo">Activo</option>
                                            <option value="2">Baja</option>
                                        </select>
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
                                <table class="table table-bordered-hover" id="dataTable" width="100%" cellspacing="0">
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
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php include("control_invent/select_table_inventario.php")?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


            </div>
            <!-- End of Main Content -->

                        <!-- AQUI VA EL FOOTER -->
                        <?php include("includes/footer.php")?> 