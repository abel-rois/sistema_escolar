        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo URL; ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo get_image('logo_500.png'); ?>" alt="<?php echo get_sitename(); ?>" class="img-fluid" style="width: 90px;">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php if (is_admin(get_user_role())): ?>
            <li class="nav-item active">
            <a class="nav-link" href="admin">
                    <i class="fas fa-fw fa-user-lock"></i>
                    <span>Administración</span></a>
            </li>
            <?php endif; ?>
            

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menú
            </div>

            <!-- Nav Item - profesores -->
            <li class="nav-item">
            <a class="nav-link" href="profesores">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Profesores</span></a>
            </li>
            
            <!-- Nav Item - alumnos -->
            <li class="nav-item">
            <a class="nav-link" href="alumnos">
                    <i class="fas fa-fw fa-book-reader"></i>
                    <span>Alumnos</span></a>
            </li>

            <!-- Nav Item - materias -->
            <li class="nav-item">
            <a class="nav-link" href="materias">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Materias</span></a>
            </li>

            <!-- Nav Item - grupos -->
            <li class="nav-item">
            <a class="nav-link" href="grupos">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Grupos</span></a>
            </li>

            <!-- Nav Item - horarios -->
            <li class="nav-item">
            <a class="nav-link" href="horarios">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>Horarios</span></a>
            </li>

            <!-- Nav Item - lecciones -->
            <li class="nav-item">
            <a class="nav-link" href="lecciones">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Lecciones</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->