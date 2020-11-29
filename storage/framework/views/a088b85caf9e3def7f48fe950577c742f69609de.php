<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Demostracion Sprint 2</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>
    

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <style>
        *{
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        .card{
            
            background-color: #113049;
        }
        .menus{
            background-color: #113049;
        }
        .menus>a,.navbar-white{
            background-color: #e6e7e7;
        }
        .nav-link.active {
            background-color: #e6e7e7;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
              

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-dark elevation-4 menus">
                <!-- Brand Logo -->
                <a href="<?php echo e(url('/')); ?>" class="brand-link">
                    <img src="<?php echo e(asset ('dist/images/logo montichelo.png')); ?>" alt="AdminLTE Logo" class="brand-image "
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">.</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                <?php if(auth()->guard()->guest()): ?>
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar Sesión')); ?></a>
                                <?php else: ?>
                                <?php echo e(Auth::user()->name); ?>

                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>

                                <?php endif; ?>
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="/" class="<?php echo e(Request::path() === '/' ? 'nav-link active' : 'nav-link'); ?>">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>
                            

                           

                           
            </ul>
          </li>
        </ul>
      </nav> 



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                Plan estrategico
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
             
              <a href="<?php echo e(route('mision.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Mision/Vision</button></a>
              </li>
              <li class="nav-item">
             
              <a href="<?php echo e(route('politica.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Politica de calidad</button></a>
              </li>
              <li class="nav-item">
          
              <a href="<?php echo e(route('valores.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Valores corporativos</button></a>
              </li>
              <li class="nav-item">
           
              <a href="<?php echo e(route('plan.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Plan estrategico vigente</button></a>
              </li>
              <li class="nav-item">
          
              <a href="<?php echo e(route('organigrama.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Organigrama</button></a>
              </li>
              <li class="nav-item">
              <a href="<?php echo e(route('unidades.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Unidades estrategicas de negocio</button></a>
              </li>
            </ul>
          </li>

                        </ul>
                    </nav>
                    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
               Talento humano
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              
              <a href="<?php echo e(route('novedades.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Novedades</button></a>
              </li>
            <li class="nav-item">
              
              <a href="<?php echo e(route('capacitaciones.index')); ?>"><button type="button"  class="btn " style="margin-left:25px">Capacitaciones</button></a>
              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('cumple.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Cronograma de cumpleaños</button></a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                                <a href="<?php echo e(route('usuarios.index')); ?>" style="margin-left:25px" 
                                    class="<?php echo e(Request::path() === 'index' ? 'nav-link active' : 'nav-link'); ?>">
                                    <p>
                                        Directorio
                                        <?php use App\User; $users_count = User::all()->count(); ?>
                                        <span class="right badge badge-danger"><?php echo e($users_count ?? '0'); ?></span>
                                    </p>
                                </a>
                            </li>
              
              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('biografias.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Biografias</button></a>
              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('infografias.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Infografias</button></a>
              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('copasst.index')); ?>"><button type="button" class="btn " style="margin-left:25px">COPASST</button></a>
              </li>
            </ul>
          </li>
                        </ul>
                    </nav>

                    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
               SIG
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              
              <a href="<?php echo e(route('Manualesoriginal.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Manuales</button></a>
              </li>
            <li class="nav-item">
              
              <a href="<?php echo e(route('procedimientos.index')); ?>"><button type="button"  class="btn " style="margin-left:25px">Procedimientos</button></a>
              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('formatos.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Formatos</button></a>
              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('registros.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Registros</button></a>
              </li>
             
            </ul>
          </li>
                        </ul>
                    </nav>
                    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
              Buzon de sugerncias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          
              <li class="nav-item">
              
              <a href="<?php echo e(route('pqrs.index')); ?>"><button type="button" class="btn " style="margin-left:25px">PQRS</button></a>
              </li>
             
            </ul>
          </li>
                        </ul>
                    </nav>


                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
    
                <section class="content" style="background-color:transparent;">
                
                    <?php echo $__env->yieldContent('content'); ?>
   
                </section>
                <div class="row">

  

                <!-- /.content -->
            </div>
            
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
    
</body>



</html>
<?php /**PATH C:\laragon\www\admin\resources\views/layouts/demo.blade.php ENDPATH**/ ?>