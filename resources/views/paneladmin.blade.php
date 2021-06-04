@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a  href="{{ url('/') }}" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a  class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Parqueaderos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Parqueadero
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                <i class="fas fa-parking"></i>
                  <p>Parqueadero</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
       
        
        <div class="card">
                

                <div class="card-body">
                  

<div class="card-header"><h1>Parqueaderos</h1></div>

                

                <div class="card-body">
                  <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#ventana_modal" >
                <i class="far fa-plus-square"></i> Agregar
                </button>

                        <table id="example" class="table table-striped  table-bordered">
                            <thead style="background: black; color: white; text-align: center;">
                                <tr>
                        
                                    <th>Nombre</th>
                                    <th>Puesto</th>
                                    <th>Ubicacion</th>
 					                          <th>Valor</th>
					                          <th>Disponible</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                           @if(count($parqueaderos))
                            @foreach($parqueaderos as $parqueadero)
                             <tr>
                                
                                 <td>{{$parqueadero->nombreParqueadero}}</td>
                                  <td>{{$parqueadero->numeroPuesto}}</td>
				                          <td>{{$parqueadero->ubicacion}}</td>
                                  <td>{{$parqueadero->valor}}</td>
                                  <td>{{$parqueadero->disponibilidad}}</td>
                                 <td style="text-align:center;">
                                 

                                


                                    <input type="button"  type="button" class="btn btn-warning" style="cursor:pointer; margin-right:10px;" value="Actualizar" onclick="actualizar(<?php echo $parqueadero->id;  ?>  , ' <?php echo $parqueadero->nombreParqueadero;  ?> '  , ' <?php echo $parqueadero->numeroPuesto;  ?> '  , ' <?php echo $parqueadero->ubicacion;  ?> ' , ' <?php echo $parqueadero->disponibilidad;  ?> ' , ' <?php echo $parqueadero->valor;  ?> ' )">
                                    
                                   <input type="button" type="button" class="btn btn-danger" style="cursor:pointer; margin-right:10px;" value="Eliminar" onclick="eliminar(<?php echo $parqueadero->id;  ?>)">   
                             </tr>
                                    @endforeach
                                @endif 
                                 </td>   
                            </tbody>
                        </table>
                 
                </div>
<div>


        


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Parqueaderos Inteligentes</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
<div class="modal fade" id="ventana_modal" >
            <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                      <h4 class="modal-title"> Agregar Parqueadero</h4>
                   <button type="button" class="close" data-dismiss="modal">
                       <span>&times;</span>
                   </button>
                </div>
                <div class="modal-body">
                    <form id="formulario_agregar" action="{{route('agregar')}}" method="post">

                        @csrf
                        <table class="table">
                         <thead>
                           <tr>
                             <th>Nombre</th>
				                    <th>Puesto</th>
                              <th>Ubicacion</th>
				                      <th>Disponible</th>
                               <th>Valor</th>
                           </tr>
                         </thead>
                         <tbody>
                            <tr>
                             <td><input type="text" class="form-control" name="nombre" id="nombre"></td>
			<td><input type="text" class="form-control" name="puesto" id="puesto"></td>
                             <td><input type="text" class="form-control" name="ubicacion" id="ubicacion"></td>
				<td><input type="text" class="form-control" name="disponible" id="disponible"></td>
                             <td><input type="text" class="form-control" name="valor" id="valor"></td>
             
                            </tr>
                         </tbody>
                          
                        </table>

                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="Agregar">
                        </div>
                      
                    </form>

                </div>
               </div>
            </div>
</div>





<script>
     function actualizar(id_a,name,puesto,ubic,disp,valor)
    {
      
        $('#id_park').val(id_a);
        $('#nombre_a').val(name);
        $('#puesto_a').val(puesto);
        $('#ubicacion_a').val(ubic);
	$('#disponible_a').val(disp);
	$('#valor_a').val(valor);
        $("#ventana_modal_actualizar").modal("show");

    }
</script>  

 

  

<div class="modal fade" id="ventana_modal_actualizar" >
            <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                      <h4 class="modal-title"> Actualizar Paqueaderos</h4>
                   <button type="button" class="close" data-dismiss="modal">
                       <span>&times;</span>
                   </button>
                </div>
                <div class="modal-body">
                    <form id="formulario_actualizar" action="{{route('actualizar')}}" method="post">

                        @csrf
                        <table class="table">
                         <thead>
                           <tr>
                              <th>Nombre</th>
				                      <th>Puesto</th>
                              <th>Ubicacion</th>
				                      <th>Disponible</th>
                               <th>Valor</th>
                        
                              
                           </tr>
                         </thead>
                         <tbody>
                            <tr>
                            <input type="hidden" name="id_park" id="id_park" >
                               <td><input type="text" class="form-control" name="nombre_a" id="nombre_a"></td>
			<td><input type="text" class="form-control" name="puesto_a" id="puesto_a"></td>
                             <td><input type="text" class="form-control" name="ubicacion_a" id="ubicacion_a"></td>
				<td><input type="text" class="form-control" name="disponible_a" id="disponible_a"></td>
                             <td><input type="text" class="form-control" name="valor_a" id="valor_a"></td>                               
                            </tr>
                         </tbody>
                          
                        </table>

                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="Actualizar">
                        </div>
                      
                    </form>

                </div><!--modal-body-->
               </div><!--modal-content-->
            </div><!--modal-dialog-->

</div><!--modal-fade-->



<!---eliminar registros -->


<script>
     function eliminar(id_e)
    {
       
        $('#id_park_e').val(id_e);
        $("#ventana_modal_eliminar").modal("show");

    }
</script>  


<div class="modal fade" id="ventana_modal_eliminar" >
            <div class="modal-dialog"  >
                <div class="modal-content" >
                 <div class="modal-header">
                    <h4 class="modal-title" style="padding-left: 20%; font-family: cursive;" >¿Desea Eliminar el Parqueadero?</h4> 
                   <button type="button" class="close" data-dismiss="modal">
                       <span>&times;</span>
                   </button>
                </div>
               
                    <form  action="{{route('eliminar')}}" method="post">

                        @csrf
                       
                            <input type="hidden" name="id_park_e" id="id_park_e" >
                             

                        <div class="modal-footer"  >
                             <input class="btn btn-success" type="close"  data-dismiss="modal" value="Cerrar" >
                            <input class="btn btn-danger" type="submit" value="Elminar" >
                        </div>
                      
                    </form>

          
               </div><!--modal-content-->
            </div><!--modal-dialog-->

</div><!--modal-fade-->
@endsection
