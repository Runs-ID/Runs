<!DOCTYPE html>
<html class="side-header-overlay-full-screen">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Runs - @yield('title')</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Runs">
		<meta name="author" content="Runs">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('storage/img/logo.ico') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web fuentes  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800%7CMontserrat:300,400,600,700" rel="stylesheet" type="text/css">

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/animate/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('storage/styles_S/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/css/theme-shop.css') }}">

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/styles_S/vendor/rs-plugin/css/navigation.css') }}">
		
		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('storage/styles_S/css/demos/demo-architecture-interior.css') }}">

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('storage/styles_S/css/skins/skin-architecture-interior.css') }}"> 

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('storage/styles_S/css/custom.css') }}">

		<!-- Librerias -->
		<script src="{{ asset('storage/styles_S/vendor/modernizr/modernizr.min.js') }}"></script>

		<!--Vue-toast-->
		<link href="https://cdn.jsdelivr.net/npm/vue-toast-notification/dist/theme-default.css" rel="stylesheet">

	</head>
	<body data-target="#header" data-spy="scroll" data-offset="100">

		<div class="body">
			<div class="sticky-wrapper sticky-wrapper-transparent sticky-wrapper-effect-1 sticky-wrapper-effect-1-dark sticky-wrapper-border-bottom" data-plugin-sticky data-plugin-options="{'minWidth': 0, 'stickyStartEffectAt': 100, 'padding': {'top': 0}}">
				<div class="sticky-body">
					<div class="container container-xl">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="py-4">
									<a href="{{ route('home.index') }}">
										<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="153" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
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
										<!--<img alt="Runs" width="153" src="{{ asset('storage/img/logo.png') }}"> width: 153; height:53;-->
									</a>
								</div>
							</div>
							<div class="col-auto text-right d-flex align-items-center justify-content-end">
								<a href="tel:+5401153388755" class="text-color-light font-weight-bold text-decoration-none d-none d-sm-block mr-2">CONTACTANOS! <span class="font-weight-light">+54 011 5338-8755</span></a>
								<ul class="social-icons social-icons-clean social-icons-icon-light d-none d-md-inline-block mx-4">
									<li class="social-icons-facebook"><a href="https://www.facebook.com/runs.ti" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-instagram"><a href="https://www.instagram.com/runs.tu.identidad.digital" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></i></a></li>
									<li class="social-icons-whatsapp"><a href="https://wa.link/jg2w5x" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
								</ul>
								<button class="hamburguer-btn hamburguer-btn-light" data-set-active="false">
									<span class="hamburguer">
										<span></span>
										<span></span>
										<span></span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header id="header" class="side-header-overlay-full-screen side-header-hide" data-plugin-options="{'stickyEnabled': false}">

				<button class="hamburguer-btn hamburguer-btn-light hamburguer-btn-side-header hamburguer-btn-side-header-overlay active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
				</button>

				<div class="header-body d-flex h-100">
					<div class="header-column flex-row flex-lg-column justify-content-center h-100">
						<div class="header-container container d-flex h-100">
							<div class="header-row header-row-side-header flex-row h-100 pb-5">
								<div class="side-header-scrollable scrollable colored-slider h-50" data-plugin-scrollable>
									<div class="scrollable-content">
										<div class="header-nav header-nav-light-text header-nav-links header-nav-links-side-header header-nav-links-vertical header-nav-links-vertical-expand header-nav-click-to-open align-self-start">
											<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-4 header-nav-main-sub-effect-1">
												<nav>
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown">
															<a class="dropdown-item active" data-hash data-hash-offset="95" href="#home">Inicio</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" data-hash data-hash-offset="95" href="#whoweare">Sobre nosotros</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" data-hash data-hash-offset="95" href="#ourservices">Servicios</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" data-hash data-hash-offset="95" href="#prices">Precios</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" data-hash data-hash-offset="95" href="#ourprojects">Planes</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" data-hash data-hash-offset="95" href="#contactus">Contacto</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" href="https://soporte.runs.com.ar/" target="_blank">Soporte</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			@yield('content')

			<footer id="footer" class="bg-quaternary border-width-1 custom-border-color-grey py-5 mt-0">
				<div class="footer-top">
		      <div class="container">
		        <div class="row">

		          <div class="col-lg-3 col-md-6 footer-info">
		            <h3><img src="{{ asset('storage/img/logo.png') }}" alt="logo" title="Runs"></h3>
		          </div>

		          <div class="col-lg-6 col-md-6 footer-links">
		            <ul>
		              <li style="list-style:none;border-bottom: solid grey 1px"><i class="fas fa-chevron-right"></i> <a data-hash data-hash-offset="95" href="#home">Inicio</a></li>
		              <li style="list-style:none;border-bottom: solid grey 1px"><i class="fas fa-chevron-right"></i> <a data-hash data-hash-offset="95" href="#whoweare">Sobre nosotros</a></li>
		              <li style="list-style:none;border-bottom: solid grey 1px"><i class="fas fa-chevron-right"></i> <a data-hash data-hash-offset="95" href="#ourservices">Servicios</a></li>
		              <li style="list-style:none;border-bottom: solid grey 1px"><i class="fas fa-chevron-right"></i> <a data-hash data-hash-offset="95" href="#prices">Precios</a></li>
		              <li style="list-style:none;border-bottom: solid grey 1px"><i class="fas fa-chevron-right"></i> <a data-hash data-hash-offset="95" href="#ourprojects">Planes</a></li>
		              <li style="list-style:none;border-bottom: solid grey 1px"><i class="fas fa-chevron-right"></i> <a data-hash data-hash-offset="95" href="#contactus">Contacto</a></li>
		              <li style="list-style:none;border-bottom: solid grey 1px"><i class="fas fa-chevron-right"></i> <a href="https://soporte.runs.com.ar/" target="_blank">Soporte</a></li>
		            </ul>
		          </div>

		          <div class="col-lg-3 col-md-12 footer-contact text-center">
		            <p class="text-left">
		              <strong>Telefono:</strong><a href="tel:+5401153388755"> +54 011 5338-8755</a><br>
		              <strong>Email:</strong><a href="mailto:consultas@runs.com.ar"> consultas@runs.com.ar </a><br>
		              <strong>Horario:</strong> Lunes a Viernes de 9:00 a 17:00 <br>
		            </p>

		            <div class="social-links">
		              <a style="font-size: 20px; margin-right:25px" href="https://www.facebook.com/runs.ti" target="_blank" class="social-icons-facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
		              <a style="font-size: 20px;" href="https://www.instagram.com/runs.tu.identidad.digital" target="_blank" class="social-icons-instagram" title="Instagram"><i class="fab fa-instagram"></i></a>
		              <a style="font-size: 20px; margin-left:25px" href="https://wa.link/jg2w5x" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="{{ asset('storage/styles_S/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/vivus/vivus.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('storage/styles_S/js/theme.js') }}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('storage/styles_S/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('storage/styles_S/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('storage/styles_S/js/views/view.contact.js') }}"></script>
		
		<!-- Demo -->
		<script src="{{ asset('storage/styles_S/js/demos/demo-architecture-interior.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('storage/styles_S/js/custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('storage/styles_S/js/theme.init.js') }}"></script>

		<!-- Vue -->
		<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
		<!--Vue toast-->
		<script src="https://unpkg.com/vue-toasted"></script>

		<!-- Alertas -->
		<script src="{{ asset('storage/styles_S/js/toastr/toastr.js') }}"></script>

		@yield('script')

	</body>
</html>