<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Runs - Administración - @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('storage/styles_S/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Cerrar sesión
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
      <div class="text-center">
      <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="130" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
        viewBox="0 0 25350 6250"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         <defs>
          <style type="text/css">
           <![CDATA[
            .fil0 {fill:#0088CC}
           ]]>
          </style>
         </defs>
         <g id="Capa_x0020_1">
          <metadata id="CorelCorpID_0Corel-Layer"/>
          <path class="fil0" d="M2406.54 4096.23c302.87,-205.7 1333.43,-818.9 1473.18,-974.06l-1482.71 -965.9c-213.39,-124.89 -394.86,-204.13 -428.99,-348.9l66.11 -93.8c160.17,5.49 970.03,545.35 1160.45,668.51 168.98,109.3 374.14,250.73 556.73,359.37 271.43,161.49 473.05,236.29 500.72,430.72l-1096.95 720.56c-197.62,110.83 -916.31,669.04 -1119.03,667.99l-70.99 -84.88c58.97,-204.84 280.01,-269.95 441.48,-379.61zm-1433.38 -832.95c120.99,1234.44 1163.09,2115.25 2258.2,2003.03 647.24,-66.33 1099.79,-318.49 1449.25,-692.65 1229.82,-1316.78 309.7,-3628.29 -1698.51,-3568.12 -1092.56,32.73 -2123.83,1085.48 -2008.94,2257.74z"/>
          <path class="fil0" d="M2673.45 821.68c710.52,-164.5 1450.86,125.78 1853.01,440.74 1735.84,1359.45 846.27,3897.58 -980.4,4188.12 -3073.68,488.9 -3959.96,-3914.06 -872.61,-4628.86zm3321.35 2688.55c176.75,-1130.54 -435.82,-2334.79 -1424.32,-2892.34 -335.64,-189.32 -620.38,-305.2 -1086.03,-364.13 -1768.27,-223.81 -3035.14,998.19 -3274,2494.02 -398.86,2497.87 2643.64,4391.85 4755.2,2639.18 495.03,-410.89 889.67,-984.59 1029.15,-1876.73z"/>
          <path class="fil0" d="M17236.26 2641.11c180.45,169.39 790.62,1215.24 1007.23,1528.17l953.99 1508.42 1136.48 0.07 -0.73 -4967.3 -1119.25 0.79 -15.38 3061.02c-178.74,-220.24 -325.05,-496.07 -492.85,-754.02l-1262.48 -1959.24c-289.65,-448.26 -69.65,-348.55 -1352.74,-348.42l-0.81 4970.17 1130.01 -27.77 16.53 -3011.89z"/>
          <path class="fil0" d="M8080.78 1637.51c578.64,-27.49 1068.67,2.32 1065.6,637.98 -3.09,638.96 -485.09,652.32 -1071.78,641.5l6.18 -1279.48zm1415.12 1923.17c163.42,-85.6 278.41,-129.34 422.83,-267.76 554.49,-531.5 530.65,-1548.94 132.42,-2030.37 -611.79,-739.61 -2004.14,-554.9 -3093.64,-548.51l0.33 4964.93 1120.03 1.28 5.54 -1922.87c217.52,204.43 873.98,1101.22 1147.45,1452.21 125.11,160.57 257.87,317.04 348.37,470.75l1432.75 -12.75c-56.36,-112.32 -314.58,-393.77 -402.16,-500.33l-1253.85 -1511.99 139.93 -94.59z"/>
          <path class="fil0" d="M11159.07 3476.28c-0.01,659.34 46.11,1273.61 389.05,1676.13 668.72,784.89 2580.36,813.66 3188.49,-117.55 357.09,-546.81 294.5,-1056.68 294.5,-1834.55l0.6 -2529.69 -1118.34 -0.22 0.13 2805.88c0,661.54 -107.26,1126.34 -781.89,1146.72 -679.47,20.5 -827.96,-422.66 -827.96,-1054.73l0.08 -2897.69 -1141.58 7.68 -3.08 2798.02z"/>
          <path class="fil0" d="M24330.39 1834.32c109.16,-294.41 336.35,-583.98 412.59,-899.27 -685.53,-379.7 -1661.53,-677.46 -2394.44,-207.04 -304.08,195.17 -564.49,457.22 -684.48,833.17 -535.68,1678.55 1807.28,1840.6 1984.94,2449.52 139.19,477.08 -438.07,631.87 -887.07,562.31 -435.15,-67.42 -760.94,-377.53 -1019.22,-507.84 -142.62,134.37 -512.09,786.03 -558.06,945.07 1991,1414.36 4128.7,297.91 3669.5,-1284.3 -231.51,-797.72 -1260.94,-1073.89 -1801.77,-1373.05 -597.6,-330.55 -317.8,-734 56.07,-819.82 505.48,-116.02 886.78,238.18 1221.94,301.25z"/>
         </g>
      </svg>
      </div>
      <!--<img alt="Runs" width="153" src="{{ asset('storage/img/logo.png') }}"> width: 153; height:53;-->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('storage/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $data_user->nombres }} {{ $data_user->apellidos }}</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          @if(in_array('leer_usuario', $permission))
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
          <div class="col-sm-6 text-right">
            <button class="btn btn-primary"><i class="fas fa-info-circle"></i> Reportar error</button>
          </div>
        </div>
      </div>
    </section>

    @yield('content')

  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Versión</b> 0.0.0
    </div>
    <strong><a href="{{ route('home.index') }}">Runs</a></strong>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- jQuery -->
<script src="{{ asset('storage/styles_S/vendor/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('storage/styles_S/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('storage/styles_S/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('storage/styles_S/js/demo.js') }}"></script>
@yield('script')
</body>
</html>
