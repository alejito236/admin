<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Montechelo</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>
    

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <style>
        *{
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        .card{
            
            background-color: #73b6c6;
            
        }
        .menus{
            background-color: #fafafa;
        }
        .menus>a,.navbar-white{
            background-color: #4caad4;
        }
        .nav-link.active {
            background-color: #e6e7e7;
        }
        .brand-link {
    display: block;
    font-size: 1.25rem;
    line-height: 0.85;
    padding: .8125rem .5rem;
    transition: width .3s ease-in-out;
    white-space: nowrap;
}.sidebar-dark-dark .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-dark .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #4caad4;
    color: #fff;
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
                <a style="position:absolute;right:15px; width:auto" class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
            </nav>
            <!-- /.navbar -->
            <link rel="preconnect" href="https://fonts.gstatic.com">

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-dark elevation-4 menus">
                <!-- Brand Logo -->
                <a  href="<?php echo e(url('/')); ?>" class="brand-link">
                   
                    <img src="<?php echo e(asset ('dist/images/logo monti.png')); ?>" alt="AdminLTE Logo" class="brand-image ">
                    
                        
                    <span style="color:#0f4056;font-family: 'Kanit', sans-serif;" class="brand-text font-weight-light">Montechelo</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div style="background-color:#4caad4;margin:auto ;border-radius:10px;" >
                        <center>
                        <div style="margin-top: 15px;padding-top: 15px;" class="image" style="margin:15px ;">
                            <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div  >
                            
                                <?php if(auth()->guard()->guest()): ?>
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar Sesión')); ?></a>
                                <?php else: ?>
                                <strong style="color:#0f4056"><?php echo e(Auth::user()->name); ?></strong>


                                <?php endif; ?>
                            
                        </div>
                        </center>
                    </div>

                    <!-- Sidebar Menu -->
                  

                           
                            <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="<?php echo e(route('novedades.index')); ?>" class="nav-link active">
            <i class="nav-icon fa fa-home"></i>
              <p>
               Novedades
               
              </p>
            </a>
      </nav> 



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background-color: #4caad4ad;">
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background-color: #4caad4ad;">
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
              
              <a href="<?php echo e(route('capacitaciones.index')); ?>"><button type="button"  class="btn " style="margin-left:25px">Capacitaciones</button></a>
              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('cumple.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Cronograma de cumpleaños</button></a>
              </li>

              </li>
              <li class="nav-item">
              
              <a href="<?php echo e(route('vacaciones.index')); ?>"><button type="button" class="btn " style="margin-left:25px">Solicitu de vacaciones</button></a>
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background-color: #4caad4ad;">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-book"></i>
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background-color: #4caad4ad;">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-bullhorn"></i>
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
                

  

                <!-- /.content -->
            </div>
            
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Intrantet</b> 3.0
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