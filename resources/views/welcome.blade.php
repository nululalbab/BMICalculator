<!doctype html>
<html>
	<head>
		<title>BMI Calculator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
  {{-- <link rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
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

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<h2>IMT Kalkulator</h2>
				<p>Hitung Body Mass Indexmu <br /> Ketahui Saran Terbaik Untukmu</p>
        <button id="myBtn" class="button special big">Hitung Sekarang!</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <p>Masukkan Tinggi dan Berat Badan</p>
					<form  method="post" action="{{route('hitung.imt')}}"}>
	          {{ csrf_field() }}
            <div class="row uniform 50%">
              <div class="12u 12u$(xsmall)">
                <input type="text" pattern="[0-9]+" name="bb" id="bb" value="" placeholder="Berat Badan(kg)" required/>
              </div>
              <div class="12u 12u$(xsmall)">
                <input type="text" pattern="[0-9]+" name="tb" id="tb" value="" placeholder="Tinggi Badan(cm)"  required/>
              </div>
            </div>
            <div class="" style="padding-top:30px;">
                <button name="button" type="submit" class="button special">Hitung!</button>
            </div>
          </form>
        </div>

        </div>

			</section>

		<!-- Scripts -->
    <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
