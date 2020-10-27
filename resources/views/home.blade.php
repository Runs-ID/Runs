<!--
	title
	content
	script
--->
@extends('layout')
@section('title','inicio')
@section('content')
			<div role="main" class="main">
				
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;" id="home">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1630, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'mouse', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
						<ul>
							<li class="slide-overlay" data-transition="fade">
								<img src="{{ asset('storage/img/demos/architecture-interior/slides/slide-1.jpg') }}"  
									alt="slider1"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption rs-parallaxlevel-4"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"opacity:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
									data-x="center" data-hoffset="['-150','-150','-150','-150']"
									data-y="center" data-voffset="['-20','-20','-20','-20']"
									data-width="['430','430','630','830]"
									data-height="['330','330','530','730']">
										<svg class="custom-square-1 custom-transition-1 custom-mobile-square-thickness" width="100%" height="100%">
											<rect width="100%" height="100%" fill="none" stroke-width="40" stroke="#000" />
										</svg>
									</div>

								<h1 class="tp-caption font-weight-bold text-color-light ws-normal rs-parallaxlevel-3"
									data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
									data-x="center" data-hoffset="['0','0','30','30']"
									data-y="center" data-voffset="['-55','-55','-85','-120']"
									data-width="['580','580','780','1000']"
									data-fontsize="['66','66','86','120']"
									data-lineheight="['72','72','90','125']">Desarrollamos software</h1>

								<div class="tp-caption font-weight-light text-color-light ls-0 rs-parallaxlevel-4"
									data-frames='[{"from":"opacity:0;y:[50%]","speed":2000,"to":"opacity:0.7;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
									data-x="center" data-hoffset="['-181','-181','-152','-181']"
									data-y="center" data-voffset="['45','45','45','65']"
									data-fontsize="['16','16','32','45']"
									data-lineheight="['20','20','40','50']">¡Hola! ¿querés saber quienes somos?.</div>

								<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2"
									data-hash
									data-hash-offset="95"
									href="#whoweare"
									data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']"
									data-y="center" data-voffset="['125','125','210','275']"
									data-paddingtop="['20','20','30','40']"
									data-paddingbottom="['20','20','30','40']"
									data-paddingleft="['68','68','68','95']"
									data-paddingright="['15','15','15','25']"
									data-fontsize="['16','16','23','45']"
									data-lineheight="['20','20','26','50']">SOBRE NOSOTROS <i class="fas fa-arrow-right ml-4 pl-3 mr-2 text-4"></i></a>

							</li>
							<li class="slide-overlay" data-transition="fade">
								<img src="{{ asset('storage/img/demos/architecture-interior/slides/slide-1.jpg') }}"  
									alt="slider1"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<h2 class="tp-caption text-center font-weight-bold text-color-light ws-normal rs-parallaxlevel-3"
									data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
									data-x="center" data-hoffset="['0','0','30','30']"
									data-y="center" data-voffset="['-55','-55','-85','-120']"
									data-width="['580','580','780','1000']"
									data-fontsize="['66','66','86','120']"
									data-lineheight="['72','72','90','125']">Diseñamos la pagina web para tu negocio</h2>

								<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2"
									data-hash
									data-hash-offset="95"
									href="#contactus"
									data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']"
									data-y="center" data-voffset="['125','125','210','275']"
									data-paddingtop="['20','20','30','40']"
									data-paddingbottom="['20','20','30','40']"
									data-paddingleft="['68','68','68','95']"
									data-paddingright="['15','15','15','25']"
									data-fontsize="['16','16','23','45']"
									data-lineheight="['20','20','26','50']">CONTACTANOS <i class="fas fa-arrow-right ml-4 pl-3 mr-2 text-4"></i></a>

							</li>
						</ul>
					</div>
				</div>

				<section class="section section-height-5 bg-light border-0 m-0">
					<div id="whoweare"></div>
					<div class="container container-xl">
						<div class="row align-items-center">
							<div class="col-lg-6 mb-5 mb-lg-0">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">QUIENES SOMOS</span>
								</div>
								<div class="overflow-hidden mb-3"><!--
									<h2 class="text-color-dark font-weight-extra-bold text-11 negative-ls-1 line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250"></h2>-->
								</div>
								<p class="text-4 line-height-9 pr-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Somos una empresa joven que busca tomar posición dentro del mercado del software apoyándose en la confianza y la calidad de las soluciones que proporcionamos a nuestros clientes. <br>
								Tomamos todos los proyectos con el mismo nivel de seriedad y compromiso, dado que entendemos que son las mejores bases para generar un crecimiento sólido y sostenible.</p>
								<!--
								<a href="demo-architecture-interior-who-we-are.html" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Ver proyectos</a>
								-->
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-6 col-xl-4 order-1">
										<img src="{{ asset('storage/img/demos/architecture-interior/others/others-1.png') }}" class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="3000" alt="quienes_somos_left" />
									</div>
									<div class="col-12 col-xl-4 order-3 order-xl-2">
										<div class="h-100 d-flex align-items-center position-relative px-4 py-4 py-xl-0 mt-4 mt-xl-0">
											<svg class="custom-square-1 custom-square-top-right z-index-0" width="80" height="80">
												<rect class="lineProgressFrom appear-animation" data-appear-animation="lineProgressTo" data-appear-animation-duration="3s" width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
											</svg>
											<svg class="custom-square-1 custom-square-1-no-pos z-index-0" width="100%" height="100%">
												<rect class="lineProgressAndFillFrom appear-animation" data-appear-animation="lineProgressAndFillTo" data-appear-animation-duration="3s" width="100%" height="100%" fill="none" stroke-width="13" stroke="#000" />
											</svg>
											<p class="text-color-light line-height-9 text-center text-4 z-index-1 custom-responsive-text-size-1 mb-0 px-2">Nuestros diseños se adaptan a todos tus dispositivos.</p>
										</div>
									</div>
									<div class="col-6 col-xl-4 order-2 order-xl-3">
										<img src="{{ asset('storage/img/demos/architecture-interior/others/others-2.png') }}" class="img-fluid appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="3000" alt="quienes_somos_right" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-parallax section-height-4 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('storage/img/demos/architecture-interior/backgrounds/background-1.png ') }}" id="whyhireus">
					<div class="container container-xl pb-5 mb-4">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-6 text-center" id="ourservices">
								<span class="text-color-primary custom-font-secondary font-weight-semibold">Servicios</span>
								<!--<h2 class="text-color-light font-weight-bold pb-3 mb-3">Why Hire Us?</h2>-->
								<p class="font-weight-light text-color-light line-height-9 text-4 mb-5">Estos son algunos de los servicios que prestamos, no dudes en consultar por cualquiera de nuestras vías de comunicación, así podrás recibir el asesoramiento ajustado a tus necesidades.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container container-xl custom-negative-margin-top z-index-2 position-relative">
					<div class="row align-items-center justify-content-center">
						<div class="col-sm-6 col-lg-3 col-xl-2 order-2 order-xl-1 mb-4 mb-lg-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="{{ asset('/storage/img/logos/logo-1.png') }}" class="img-fluid" alt="" /></div>
										<div><img src="{{ asset('/storage/img/logos/logo-2.png') }}" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 col-xl-2 order-3 order-xl-2 mb-4 mb-lg-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="{{ asset('/storage/img/logos/logo-3.png') }}" class="img-fluid" alt="" /></div>
										<div><img src="{{ asset('/storage/img/logos/logo-4.png') }}" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-xl-4 order-1 order-xl-3 mx-lg-5 mx-xl-0 mb-5">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body text-center mt-4">
									<div class="owl-carousel owl-theme nav-style-1 nav-dark custom-nav-size-1 mb-0" data-plugin-options="{'items':1, 'nav': true, 'dots': false}">
										<div class="text-center px-5">
											<span class="text-color-primary font-weight-bold custom-plus line-height-2 custom-text-size-1">11</span>
											<p class="text-4 custom-responsive-m-p-x">Años de experiencia</p>
										</div>
										<div class="text-center px-5">
											<span class="text-color-primary font-weight-bold custom-plus line-height-2 custom-text-size-1">23</span>
											<p class="text-4 custom-responsive-m-p-x">Proyectos finalizados</p>
										</div>
										<div class="text-center px-5">
											<span class="text-color-primary font-weight-bold custom-plus line-height-2 custom-text-size-1">153</span>
											<p class="text-4 custom-responsive-m-p-x">Tazas de café</p>
										</div>
									</div>
									<a data-hash data-hash-offset="95" href="#contactus" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 custom-btn-pos-1 custom-btn-style-1">CONTACTANOS</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 col-xl-2 order-4 order-xl-4 mb-4 mb-sm-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="{{ asset('/storage/img/logos/logo-5.png') }}" class="img-fluid" alt="" /></div>
										<div><img src="{{ asset('/storage/img/logos/logo-6.png') }}" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 col-xl-2 order-5 order-xl-5 mb-4 mb-sm-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="{{ asset('/storage/img/logos/logo-7.png') }}" class="img-fluid" alt="" /></div>
										<div><img src="{{ asset('/storage/img/logos/logo-1.png') }}" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-height-4 bg-light border-0 m-0" id="ourprojects">
					<div class="container">
						<div class="pricing-table pricing-table-no-gap mb-4">
							<div class="col-md-4">
								<div class="plan">
									<div class="plan-header">
										<h3>Landing Page</h3>
									</div>
									<div class="plan-price">
										<span class="price"><span class="price-unit">$</span>5.999</span>
										<label class="price-label">*Consulte Financiación</label>
									</div>
									<div class="plan-features">
										<ul>
											<li>1 página</li>
											<li>Formulario de contacto</li>
											<li>2 Emails</li>
											<li>Hosting por 1 año</li>
											<li>Dominio ".com.ar"</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="https://wa.link/ayrr7t" target="_blank" class="btn btn-dark btn-modern btn-outline py-2 px-4">Contactanos</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="plan plan-featured">
									<div class="plan-header bg-primary">
										<h3>Empresas</h3>
									</div>
									<div class="plan-price">
										<span class="price"><span class="price-unit">$</span>8.999</span>
										<label class="price-label">*Consulte Financiación</label>
									</div>
									<div class="plan-features">
										<ul>
											<li>5 páginas</li>
											<li>Formulario de contacto</li>
											<li>7 Emails</li>
											<li>Hosting por 1 año</li>
											<li>Dominio ".com.ar"</li>
											<li>SSL (Sitio seguro)</li>
											<li>Google Maps</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="https://wa.link/dsncar" target="_blank" class="btn btn-dark btn-modern py-2 px-4">Contactanos</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="plan">
									<div class="plan-header">
										<h3>Profesional</h3>
									</div>
									<div class="plan-price">
										<span class="price"><span class="price-unit">$</span>11.999</span>
										<label class="price-label">*Consulte Financiación</label>
									</div>
									<div class="plan-features">
										<ul>
											<li>10 páginas</li>
											<li>Formulario de contacto</li>
											<li>10 Emails</li>
											<li>Hosting por 1 año</li>
											<li>Dominio ".com.ar"</li>
											<li>Google Analytics</li>
											<li>SSL (Sitio seguro)</li>
											<li>Google Maps</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="https://wa.link/37fl77" target="_blank" class="btn btn-dark btn-modern btn-outline py-2 px-4">Contactanos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 border-0 m-0">
					<div id="ourteam"></div>
					<div class="container container-xl">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-6 text-center">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">NUESTRO EQUIPO</span>
								</div>
								<!--
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Team</h2>
								</div>
								<p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena. </p>
								-->
							</div>
						</div>
						<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
								<div class="card border-0 custom-box-shadow-1">
									<svg class="custom-square-1 z-index-0" width="80" height="80">
										<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
									</svg>
									<img class="card-img-top z-index-1" src="{{ asset('storage/img/team/team-4.png') }}" alt="equipo_left" />
									<div class="card-body">
										<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Mauro</h4>
										<p class="card-text">Desarrollador web</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 mb-4 mb-md-0">
								<div class="card border-0 custom-box-shadow-1">
									<svg class="custom-square-1 z-index-0" width="80" height="80">
										<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
									</svg>
									<img class="card-img-top z-index-1" src="{{ asset('storage/img/team/team-5.png') }}" alt="equipo_center" />
									<div class="card-body">
										<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Franco</h4>
										<p class="card-text">Desarrollador web</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card border-0 custom-box-shadow-1">
									<svg class="custom-square-1 z-index-0" width="80" height="80">
										<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
									</svg>
									<img class="card-img-top z-index-1" src="{{ asset('storage/img/team/team-6.png') }}" alt="equipo_right" />
									<div class="card-body">
										<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Edgardo</h4>
										<p class="card-text">Implementador</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 bg-quaternary border-0 m-0">
					<div id="contactus"></div>
					<div class="container container-xl">
						<div class="row mb-5">
							<div class="col text-center">
								<span class="text-color-primary custom-font-secondary font-weight-semibold">CONTACTO</span>
								<h2 class="text-color-light font-weight-bold mb-3">Ponte en contacto</h2>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-6 col-xl-4 order-2 order-xl-1 mb-4 mb-lg-0">
								<div class="card custom-card-style-1 h-100">
									<div class="card-body">
										<a href="#" class="text-decoration-none">
											<img src="{{ asset('storage/img/logo.png') }}" class="img-fluid pb-2 mt-3 mb-4" width="153" height="53" alt="logo_runs" />
										</a>
										<h3 class="text-color-primary font-weight-bold text-transform-none text-8 line-height-1 pr-5 mb-4">Tu identidad digital</h3>
										<ul class="list list-icons list-icons-sm">
											<li class="text-color-light font-weight-light">
												<i class="fas fa-angle-right custom-text-color-grey-1"></i> <strong class="font-weight-normal">Ubicación:</strong> Buenos Aires, Argentina
											</li>
											<li class="text-color-light font-weight-light">
												<i class="fas fa-angle-right custom-text-color-grey-1"></i> <strong class="font-weight-normal">Email:</strong><a href="mailto:consultas@runs.com.ar" class="link-hover-style-1 ml-1"> consultas@runs.com.ar</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-xl-4 order-1 order-xl-2 mb-4 mb-xl-0">
								<div class="card custom-card-style-1 h-100 opacity-10 py-lg-5 py-xl-0" data-appear-animation="customBorderColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -500}">
									<div class="card-body d-flex justify-content-center flex-column text-center">
										<span class="text-color-light text-4 mb-3">LLAMANOS AHORA</span>
										<a href="tel:+5401153388755" class="text-decoration-none text-color-light font-weight-bold line-height-2 text-11 opacity-10" data-appear-animation="customTextColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}">+54 011 5338-8755</a>
										<!--<a href="tel:+1234567890" class="text-decoration-none text-color-light font-weight-bold line-height-2 text-9"></a>-->
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 order-3">
								<div class="card custom-card-style-1 h-100">
									<div class="card-body pt-5">

										<form id="contactForm" class="contact-form form-style-4 form-errors-light" action="php/contact-form.php" method="POST">
											<input type="hidden" value="Contact Form" name="subject" id="subject">
											<div class="form-row">
												<div class="form-group col-lg-6">
													<input type="text" value="" data-msg-required="Ingrese su nombre." maxlength="100" class="form-control py-2" placeholder="nombre" name="name" id="name" required>
												</div>
												<div class="form-group col-lg-6">
													<input type="email" value="" data-msg-required="Ingrese su correo." data-msg-email="Ingrese su correo." maxlength="100" class="form-control py-2" placeholder="E-mail" name="email" id="email" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<textarea maxlength="5000" data-msg-required="Ingrese un mensaje." rows="4" class="form-control" placeholder="Mensaje" name="message" id="message" required></textarea>
												</div>
											</div>
											<input type="submit" value="Enviar mensaje" class="btn btn-dark text-2 font-weight-bold text-uppercase btn-px-5 py-3 position-absolute" data-loading-text="Loading..." style="bottom: -30px; right: 25px;">
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>

@endsection