<li class="side-menus  nav-link-lg {{ Request::is('*') ? 'active' : '' }}" >

    @can('editar-rol')
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>

    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="/blogs">
        <i class=" fas fa-blog"></i><span>Blogs</span>
    </a>
    <a class="nav-link" href="/companias">
        <i class=" fas fa-university"></i><span>Compañias</span>
    </a>
    <a class="nav-link" href="/dependencias">
        <i class=" fas fa-users"></i><span>Dependencias</span>
    </a>

    <a class="nav-link" href="/cargos">
        <i class=" fas fa-briefcase"></i><span>Cargos</span>
    </a>

    <a class="nav-link" href="/unidades">
        <i class=" fas fa-blog"></i><span>Unidades</span>
    </a>

    <a class="nav-link" href="/marcas">
        <i class=" fas fa-blog"></i><span>Marcas</span>
    </a>

    <a class="nav-link" href="/referencias">
        <i class=" fas fa-blog"></i><span>Referencias</span>
    </a>

    <a class="nav-link" href="/estados">
        <i class=" fas fa-blog"></i><span>Estados</span>
    </a>

    <a class="nav-link" href="/movimientos">
        <i class=" fas fa-blog"></i><span>Movimientos</span>
    </a>

    <a class="nav-link" href="/proveedores">
        <i class=" fas fa-blog"></i><span>Proveedores</span>
    </a>

    @endcan

    <a class="nav-link" href="/responsablespordependencias">
        <i class=" fas fa-blog"></i><span>Empleados</span>
    </a>

    <a class="nav-link" href="/elementosinv">
        <i class=" fas fa-home"></i><span>Elementos del inventario</span>
    </a>

    <a class="nav-link" href="/movimientoinvs">
        <i class=" fas fa-blog"></i><span>Movimientos del inventario</span>
    </a>

    <a class="nav-link" href="/grupos">
        <i class=" fas fa-users"></i><span>Grupos de Elementos</span>
    </a>


    <a class="nav-link" href="/contratos">
        <i class=" fas fa-blog"></i><span>Contratos</span>
    </a>

    <a class="nav-link" href="/responsables">
        <i class=" fas fa-blog"></i><span>Responsables</span>
    </a>

</li>
