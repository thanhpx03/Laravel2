<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <title>T-Wind - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

	    <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('bootstrap/images/favicon.ico')}}">
		<!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" type="text/css">
	    <!-- Icons -->
        <link href="{{asset('bootstrap/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/style.css')}}" />
	</head>
	<style></style>

	<body>
		
		<div class="sidenav shadow">
			<div class="text-center pt-0 pt-lg-3 pb-0 pb-lg-3">
				<div class="d-none d-lg-inline-block">
					<a class="logo text-uppercase" href="#">
						<img src="{{asset('bootstrap/images/logo-sm.png')}}" alt="logo" height="30">
						<img src="{{asset('bootstrap/images/logo.png ')}}" alt="logo" height="18">
					</a>
				</div>	
			</div>	
			<!-- NAVBAR -->
			<nav class="navbar navbar-expand-lg navbar-custom text-white sticky">
			    <div class="container">
					<a class="mobile-re text-uppercase d-inline-block d-lg-none" href="#"><img src="images/logo.png" alt="logo" height="20"></a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				        <span class="mdi mdi-menu"></span>
				    </button>

				    <div class="collapse navbar-collapse" id="navbarNav">
				        <ul class="navbar-nav nav flex-column">
				            <li class="nav-item active">
				                <a class="nav-link" href="#Introduction"><i class="mdi mdi-account-circle-outline mr-2"></i>Introduction</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Structure"><i class="mdi mdi-sitemap mr-2"></i>Structure</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#HTML_Structure"><i class="mdi mdi-language-html5 mr-2"></i>HTML Structure</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Installation"><i class="mdi mdi-language-css3 mr-2"></i>Installation</a>
							</li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Themes"><i class="mdi mdi-language-javascript mr-2"></i>Themes</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Credits"><i class="mdi mdi-cash mr-2"></i>Credits</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Support"><i class="mdi mdi-headset mr-2"></i>Support</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Change_Log"><i class="mdi mdi-update mr-2"></i>Change Log</a>
				            </li>
				        </ul>
				    </div>
			    </div>
			</nav>
			<!-- NAVBAR END-->
		</div>

		<div class="main">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="justify-content-center mx-auto">
				  <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header">
				   
					<a class="navbar-brand" href="#">
						<span class="text-dark font-weight-bold">T-Wind</span>
						<small class="text-dark font-weight-semibold">- Documentation</small>
						<span class="badge badge-danger">v1.0.0</span>
					</a>
				  </div>
			  
				  <!-- Collect the nav links, forms, and other content for toggling -->
				  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
				  </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<!-- Introduction START-->
			<section class="bg-home" id="Introduction">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="my-5 ">
								<h5 class="text-center">Thank you very much for your purchase!</h5>
								<div class="alert alert-success alert-dismissable mt-5">
									<p class="mb-0">Note: You could use the ready-to-use (pre-compiled) demos available in the <code>dist</code> folder, if you are not looking for any customization. In that case, you can skip below setup steps.</p>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									
									<h4 class="header-title">Introduction</h4>
									@yield('content')
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Introduction END-->

			<!-- Structure -->
			<section class="section-sm" id="Structure">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Structure</h4>
									<hr class="hr-dashed">
											<p>I have tried my best to have standards and modular structure while developing the theme. Following sections are explaining the theme File &amp; Folder, structure, html file struture and plugins.</p>
	
											<div class="row p-t-20">
												<div class="col-sm-12">
													<h4 class="sub-title">File &amp; Folder Structure</h4>
													<hr class="hr-dashed">
	
													<pre class="prettyprint mb-0">
	</pre>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Structure -->

			<!-- HTML_Structure start -->
			<section class="section-sm" id="HTML_Structure">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">HTML Structure</h4>
									<hr class="hr-dashed">
									<p>
										<img src="{{asset('bootstrap/images/html.jpg')}}" alt="" class="img-fluid">
									</p>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- HTML_Structure end -->

			

			<!-- SCSS And CSS Start -->
			<section class="section-sm" id="Installation">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Installation</h4>
									<hr class="hr-dashed">

									

									<div class="pt-2">
										<p class="mt-3">We are using <a href="https://gulpjs.com/" target="_blank"
		                                class="text-primary">gulp</a>
		                            which allows to have complete automatation for
		                            build flow. In case if you don't know - Gulp is a toolkit for automating
		                            painful or time-consuming tasks in development workflow, so you can stop
		                            messing around and build something. You can read it more about it <a
		                                href="https://gulpjs.com/" target="_blank" class="text-primary">here</a>.</p>

										<h5 class="pt-3">Prerequisites</h5>
										<p>Please follow below steps to install and setup all prerequisites:</p>
										<ul>
											<li><strong>Nodejs</strong>
												<p class="mb-2">In order to use build tools you will need to download
			                                    and install Node.js. If you do not have Node.js installed already,
			                                    you can get it by downloading the package installer from the
			                                    official website. Please download the stable version of Node.js
			                                    (LTS).</p><a href="https://nodejs.org/" target="_blank"
			                                    class="text-primary">Download
			                                    Node.js</a>
											</li>
											<li class="mt-3"><strong>Gulp</strong>
												<p>Make sure to have the <a href="https://gulpjs.com/" target="_blank">Gulp</a> installed &amp;
													running in your computer. If you already have installed gulp on your computer, you can skip
													this step. In order to install, just run command <code>npm install -g gulp</code> from
													your terminal.</p>
											</li>
											<li class="mt-3"><strong>Yarn</strong>
												<p>Make sure to have the <a href="https://yarnpkg.com/lang/en/" target="_blank"
			                                        class="text-primary">Yarn</a> installed &amp; running in your
			                                    computer. If you already have installed yarn on your computer, you
			                                    can skip this step.</p>
											</li>
											<li><strong>Git</strong>
												<p>Make sure to have the <a href="https://git-scm.com/" target="_blank">Git</a> installed &amp;
													running in your computer. If you already have installed git on your computer, you can skip
													this step</p>
											</li>
										</ul>
										
										<p>To setup, follow below mentioned steps:</p>
										<ul>
											<li><strong>Install Prerequisites</strong>
												<p>Make sure to have all above prerequisites installed &amp; running in your computer</p>
											</li>
											<li><strong>Install Dependencies</strong>
												<p>Open your terminal, go to your folder and enter the command <code>npm install</code>. This
													would install all required dependencies in <code>node_modules</code> folder.</p>
											</li>
										</ul>
										<p class="mt-4">After you finished with above steps, you can run the command to compile scss into css:
											<code>gulp</code>
										</p>
									</div>
									<h5 class="pt-3">Installation</h5>
									<p class="mb-1">Open your terminal, go to your folder and enter the command <code>yarn
                                        install</code>. This would install all required dependencies in
			                            <code>node_modules</code> folder. And now, you are ready to run the Ubold
			                            for the first time.
			                        </p>

									<p class="pt-3">Following are the stylesheet files:</p>

									<table class="table table-bordered m-0">
										<thead>
											<tr>
												<th style="width: 20%;"><i class="ti-file"></i> Command</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<code>gulp</code>
												</td>
												<td>
													Runs the "vertical" demo locally, starts the
                                            development server and
                                            watches for any changes in your code, including your html,
                                            javascript, sass, etc. The development server is accessible at
                                            <a href="http://localhost:3000/"
                                                class="text-primary">http://localhost:3000/</a>.
												</td>
											</tr>

											<tr>
												<td>
													<code>gulp build</code>
												</td>
												<td>
													whitespace-normal">It compiles the source assets including scss
                                            and bundles into production
                                            ready use.
												</td>
											</tr>
										</tbody>
									</table>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- SCSS And CSS End -->

			

			<!-- Themes start -->
			<section class="section-sm" id="Themes">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Themes</h4>
									<hr class="hr-dashed">
									<p class="m-t-20">
										T-Wind uses jQuery, Bootstrap JS framework(at its core) and some of the
										third-party plugins. There are may more third party plugin which you can
										use according to your needs. The css is already containing matching
										style for these plugins so you will not need to do anything around it.
									</p>

									<p>They are explained below: </p>

									<table class="table table-bordered m-0">
										<thead>
											<tr>
												<th style="width: 20%;"><i class="ti-file"></i> Themes</th>
												<th>Changes</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<code>Light version</code>
												</td>
												<td>
													Default
                                        
												</td>
											</tr>
											<tr>
												<td>
													<code>Drak version</code>
												</td>
												<td>
													To have dark mode enabled, replace the reference of <code>html lang="en" dir="ltr" class=""</code> stylesheet file to <code>html lang="en" dir="ltr" class="dark"</code> and <code><body data-layout-mode="light"></code> to <code><body data-layout-mode="dark"></code>
                                                <br> in the <code> src/partials/body.html </code> and all html files it will set to dark version.
												</td>
											</tr>											
										</tbody>
									</table>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Themes end -->

			<!-- Credits Start -->
			<section class="section-sm" id="Credits">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Credits &amp; Official Documentation</h4>
									<p>I've used the following resources as listed. These are some awesome creation and I am really thankful to the respective community.</p>
									<hr class="hr-dashed">
									<ul class="">
										<li><a href="https://tailwindcss.com/">Tailwindcss</a></li>	
										<li><a href="https://github.com/apexcharts/apexcharts.js">Apex Chart</a></li>
										<li><a href="https://chartjs.org/">Chartjs</a></li>	
										<li><a href="https://clipboardjs.com/">Clipboard</a></li>
										<li><a href="https://github.com/fengyuanchen/cropper">Cropper</a></li> 
										<li><a href="https://github.com/googlearchive/code-prettify">Code Prettify</a></li>
										<li><a href="https://arshaw.com/fullcalendar/">Full Calendar</a></li>
										<li><a href="https://github.com/bevacqua/dragula">Dragula</a></li>
										<li><a href="https://github.com/apache/echarts">Echarts</a></li>
										<li><a href="https://hpneo.github.io/gmaps/">Gmaps</a></li>
										<li><a href="https://github.com/metafizzy/huebee">Huebee</a></li>
										<li><a href="https://github.com/uNmAnNeR/imaskjs">Imask</a></li>
										<li><a href="https://github.com/Leaflet/Leaflet">Leaflet</a></li>
										<li><a href="https://github.com/themustafaomar/jsvectormap">Vector Maps</a></li>
										<li><a href="https://github.com/javve/list.js">List js</a></li>
										<li><a href="https://github.com/miniMAC/magic">Magic</a></li>
										<li><a href="https://github.com/Mobius1/Selectr">Mobius1 Selectr</a></li>
										<li><a href="https://github.com/moment/moment">Moment</a></li>
										<li><a href="https://github.com/leongersen/noUiSlider">noUiSlider</a></li>
										<li><a href="https://github.com/postcss/postcss-import">Postcss Import</a></li>
										<li><a href="https://github.com/fiduswriter/Simple-DataTables">DataTables</a></li>
										<li><a href="https://github.com/Grsmto/simplebar">Simplebar</a></li>
										<li><a href="https://github.com/sweetalert2/sweetalert2">Sweet-Alert2</a></li>
										<li><a href="https://github.com/nolimits4web/swiper">Swiper</a></li>
										<li><a href="https://github.com/tinymce/tinymce">Tinymce</a></li>
										<li><a href="https://github.com/transloadit/uppy">Uppy</a></li>
										<li><a href="https://github.com/Mobius1/Editable">Vanilla Datatables Editable</a></li>
										<li><a href="https://github.com/mymth/vanillajs-datepicker">Vanillajs Datepicker</a></li>
										<li><a href="https://github.com/leongersen/wnumb">Wnumb</a></li>	
									</ul>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Credits End -->

			<!-- Support start -->
			<section class="section-sm" id="Support">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Support</h4>
									<hr class="hr-dashed">
									<p class="mt-4">
										Once again thank you for purchasing the theme. I am always avaialble to help you. If you have any suggestion or feature to make it more better, I am requesting you to contact me, I'll try my best to add them in future updates.
									</p>

									<p>
										Best,
									</p>
									<p class="text-primary">
										- <strong>Mannat-themes</strong>
									</p>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Support end -->

			<!-- Change_Log start -->
			<section class="section-sm" id="Change_Log">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Change Log</h4>
									<hr class="hr-dashed">									
									
									<p style="text-decoration: underline; font-weight: 900;"><strong>Version 1.0.0 <small>- 16 July 2022</small></strong></p>
									
									<ul>
										<li>
											Initial released
										</li>
									</ul>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Change_Log end -->
			

			<!-- Footer Start -->
			<footer class="footer bg-light mt-4">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="text-center">
								<p class="mb-0">© 2022 <span class="text-custom">T-Wind</span>. Design by Mannat-Themes.</p>
							</div>
						</div>
					</div>
				</div><!--end container-->
			</footer>
			<!-- Footer End -->
				

			<!-- JAVASCRIPTS -->
		    <script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
			<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
			<script src="{{asset('bootstrap/js/jquery.easing.min.js')}}"></script>
			<script src="{{asset('bootstrap/js/scrollspy.min.js')}}"></script>
		    <!-- Custom -->
			<script src="{{asset('bootstrap/js/app.js')}}"></script>
		</div>		
	</body>
</html>