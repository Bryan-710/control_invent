<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas  fa-solid fa-binoculars"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Bryan</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="home.php">
        <i class="fa-solid fa-house"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Gestión de productos
</div>

<!-- Nav Item - Gestion de inventario -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu1"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-store"></i>
        <span>Gestión de inventario</span>
    </a>
    <div id="menu1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Inventario</h6>
            <a class="collapse-item" href="nuevo_producto.php">Nuevo Producto</a>
            <a class="collapse-item" href="mostrar_producto.php">Mostrar Productos</a>
            <a class="collapse-item" href="editar_producto.php">Editar Productos</a>
            <a class="collapse-item" href="eliminar_producto.php">Eliminar Productos</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu2"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-solid fa-user-tag"></i>
        <span>Categoría y Proveedores</span>
    </a>
    <div id="menu2" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestión de inventario</h6>
            <a class="collapse-item" href="control_categoria_invent.php">Control de categorías</a>
            <a class="collapse-item" href="control_proveedores.php">Control de proveedores</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Movimientos inventario
</div>

<!-- Nav Item - Pages Collapse Movimientos -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu3"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-up-down-left-right"></i>
        <span>Movimientos</span>
    </a>
    <div id="menu3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestiones de movimientos</h6>
            <a class="collapse-item" href="nuevo_movimiento.php">Entrada de productos</a>
            <a class="collapse-item" href="mostrar_movimientos.php">Consulta de moviemientos</a>                                        
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Reportes -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu4"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Reportes</span>
        </a>
        <div id="menu4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Inventario</h6>
                <a class="collapse-item" href="generador_pdf.php">Reporte de Productos</a>
                <a class="collapse-item" href="reporte_categorias.php">Reporte de Categorias</a>
                <a class="collapse-item" href="reporte_proveedor.php">Reporte de Proveedores</a>
                <a class="collapse-item" href="reporte_movimientos.php">Reporte de Movimientos</a>
                <a class="collapse-item" href="reporte_usuarios.php">Reporte de Usuarios</a>
            </div>
        </div>
    </li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="control_usuarios.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Control de usuarios</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->