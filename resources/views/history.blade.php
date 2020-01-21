<!doctype html>
<html>
	<head>
		<title>BMI Calculator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
  {{-- <link rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

	</head>
	<body>

		<!-- Header -->
		<!-- Header -->
			<header id="header">
				<h1><strong><a href="/">IMT</a></strong> Kalkulator</h1>
				<nav id="nav">
					<ul>
						<li><a href="/">IMT Kalkulator</a></li>
						<li><a href="/history">Riwayat</a></li>
						<li><a href="/suggestion">Saran</a></li>

						@guest
								<li><a href="{{ route('login') }}">Masuk</a></li>
								<li><a href="{{ route('register') }}">Daftar</a></li>
						@else
								<li class="dropdown">

										<ul class="dropdown-menu">
												<li>
														<a href="{{ route('logout') }}"
																onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
																Logout
														</a>

														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
														</form>
												</li>
										</ul>
								</li>
						@endguest

					</ul>
				</nav>
			</header>

			<section id="banner" >
				<div class="container">
					<header class="major special">
						<h2>Riwayat</h2>
						<p>Hai <strong style="color:white;">{{Auth::user()->name}}</strong>  Di Halaman ini kamu akan dapat melihat semua history penghitungan</p>
					</header>
			</section >
					<!-- Text -->
						<section id="main" class="wrapper" style="padding-left:10%;">
							@foreach ($bmi as $bmi)
								<hr />

								<header>
									<h3>Penghitungan Tanggal {{$bmi->DATE}}</h3>
									<strong><p>{{$bmi->kategori->KATEGORI}} </p></strong>

								</header>
								<p>{{$bmi->kategori->SARAN}}</p>

								<hr />
							@endforeach



							</section>
			<script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
