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
						<h2>Saran</h2>
						<p>Di Halaman ini kamu akan mendapatkan saran sesuai dengan apa yang kamu butuhkan.</p>
					</header>
			</section >
					<!-- Text -->
						<section id="main" class="wrapper" style="padding-left:10%;">
							<hr />

							<header>
								<h3>Kurus</h3>
								<p>Berat Badan kurang dari berat badan ideal</p>
							</header>
							<p>Tanpa harus mengubah pola makan secara radikal, Anda dapat meningkatkan asupan kalori dengan menambahkan ekstra kacang-kacangan, susu full cream, alpukat, telur atau gandum utuh ke dalam menu harian Anda</p>

							<hr />

							<header>
								<h3>Normal</h3>
								<p>Berat Badan sesuai dengan berat badan ideal</p>
							</header>
							<p>Jaga pola makan dan gaya hidup anda, pastikan anda cukup berolahraga dan beraktivitas.</p>

							<hr />

							<header>
								<h3>Gemuk</h3>
								<p>Berat Badan lebih dari  dengan berat badan ideal</p>
							</header>
							<p>Anda harus memilih sumber karbohidrat yang mengandung banyak serat,Ganti makanan manis dengan yang lebih sehat, Minum dua gelas air sebelum makan, Perbanyak makanan mengandung protein, Gerakkan tubuh Anda seaktif mungkin, tidur yang cukup</p>

							<hr />

						</section>
			<script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
