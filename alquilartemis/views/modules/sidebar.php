<aside class="main-sidebar sidebar-dark-teal elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-teal">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Alquilartemis 2.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/alquila.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alquilartemis</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="/cotizaciones/alquilartemis/" class="nav-link <?php if($routesArray[3]== ""): ?> active <?php endif ?>">
                    <i class="nav-icon fas fa-clipboard"></i>
                    <p>
                        Cotizaciones
                    </p>
                    </a>
                </li>
               
               <li class="nav-item">
                    <a href="/cotizaciones/alquilartemis/productos" class="nav-link <?php if($routesArray[3]== "productos"): ?> active <?php endif ?>">
                    <i class="nav-icon fas fa-hammer"></i>
                    <p>
                        Productos
                    </p>
                    </a>
                </li>
          <li class="nav-item">
            <a href="/cotizaciones/alquilartemis/clientes" class="nav-link <?php if($routesArray[3]== "clientes"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Clientes (Constructoras)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cotizaciones/alquilartemis/empleados" class="nav-link <?php if($routesArray[3]== "empleados"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Empleados
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cotizaciones/alquilartemis/alquiler" class="nav-link <?php if($routesArray[3]== "alquiler"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-truck-loading"></i>
              <p>
              Alquiler
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cotizaciones/alquilartemis/devoluciones" class="nav-link <?php if($routesArray[3]== "devoluciones"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-redo"></i>
              <p>
              Devoluciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cotizaciones/alquilartemis/inventario" class="nav-link <?php if($routesArray[3]== "inventario"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
              Inventario
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cotizaciones/alquilartemis/liquidaciones" class="nav-link <?php if($routesArray[3]== "liquidaciones"): ?> active <?php endif ?>">
              <i class="nav-icon 	fas fa-calculator"></i>
              <p>
              Liquidaciones
              </p>
            </a>
          </li>
  

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>