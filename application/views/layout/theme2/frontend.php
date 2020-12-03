<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Bank Maluku</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme1/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme1/css/style.css">
	<script src="<?php echo base_url()?>assets/theme1/js/modernizr-2.6.2.min.js"></script>
</head>
<body>

	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->


	<div class="container">
		<!-- HEADER -->
		<header class="site-header">
			<div class="lang">
				<a href="#" class="active">Indonesia</a>|<a href="#">English</a>
			</div>
			<div class="row">
				<!-- Logo -->
				<div class="span-2 logo">
					<a href="#" title="Home">
						<img src="<?php echo base_url()?>assets/theme1/images/logo.png">
						<span class="site-title">Bank Maluku</span>
					</a>
				</div>
				<!-- [end] Logo -->

				<!-- Main Navigation -->
				<div class="span-4">
					<nav class="row">
						<ul class="no-style">
							<li class="span-1 home yellow"><a href="index.html">Home</a></li>
							<li class="span-1 info green"><a href="#">Corporate Info</a></li>
							<li class="span-1 contact ocean"><a href="contact.html">Contact Us</a></li>
							<li class="span-1 sitemap orange"><a href="#">Site Map</a></li>
						</ul>
					</nav>
				</div>
				<!-- [end] Main Navigation -->
			</div>
		</header>
		<!-- [end] HEADER -->

		<!-- CONTENT -->
		<div id="content">

			<div class="row">
				<div class="span-4">
				<?php foreach($contents as $key => $content): ?>
				<?php echo $this->load->view($content); ?>
			<?php endforeach ?>
				</div>

				<!-- Sidebar -->
				<div class="span-2 sidebar">

					<!-- Kurs -->
					<div class="kurs yellow">
						<h2 class="head-title">Kurs</h2>
						<table>
							<thead>
								<tr>
									<td></td>
									<td>Beli</td>
									<td>Jual</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>USD</td>
									<td>11.268,00</td>
									<td>11.432,00</td>
								</tr>
								<tr>
									<td>EUR</td>
									<td>11.268,00</td>
									<td>11.432,00</td>
								</tr>
								<tr>
									<td>SGD</td>
									<td>11.268,00</td>
									<td>11.432,00</td>
								</tr>
								<tr>
									<td>JPY</td>
									<td>11.268,00</td>
									<td>11.432,00</td>
								</tr>
								<tr>
									<td>AUD</td>
									<td>11.268,00</td>
									<td>11.432,00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- [end] Kurs -->

					<!-- Tools -->
					<div class="tools yellow">
						<h2 class="head-title">Tools</h2>
						<form>
							<div>
								<label>Suku Bunga dan Tarif</label>
								<select>
									<option>Suku Bunga Dana</option>
									<option>Suku Bunga Dana</option>
									<option>Suku Bunga Dana</option> 
								</select>
								<button>GO</button>
							</div>
							<div>
								<label>Alat Bantu dan Formulir</label>
								<select>
									<option>Kalkulator Finansial</option>
									<option>Kalkulator Finansial</option>
									<option>Kalkulator Finansial</option>
								</select>
								<button>GO</button>
							</div>
							<div>
								<label>Lokasi dan Jaringan</label>
								<select>
									<option>ATM</option>
									<option>ATM</option>
									<option>ATM</option>
								</select>
								<button>GO</button>
							</div>
						</form>
					</div>
					<!-- [end] Tools -->

					<!-- Polling -->
					<div class="polling yellow">
						<h2 class="head-title">Polling</h2>
						<p>Bagaimana Menurut Anda Tentang Pelayanan Bank Maluku?</p>
						<form>
							<div>
								<input type="radio" name="polling">Biasa-biasa saja <br>
								<input type="radio" name="polling">Kurang Memuaskan <br>
								<input type="radio" name="polling">Memuaskan <br>
								<input type="radio" name="polling">Tidak tahu
							</div>
							<button>Vote</button> <a class="btn" href="#">View Result</a>
						</form>
					</div>
					<!-- [end] Polling -->

				</div>
				<!-- [end] Sidebar -->

			</div>
		</div>
		<!-- [end] CONTENT -->

		<!-- FOOTER -->
		<footer class="site-footer">
			<div class="row">
				<div class="span-4">
					<div class="cs green">
						Customer Service <br>
						<span class="phone">(0456) 768453</span>
					</div>
				</div>
				<div class="span-2">
					<ul class="no-style other-link row">
						<li class="three-p">
							<a href="#" title="3P">3P</a>
						</li>
						<li class="akb">
							<a href="#" title="Ayo ke Bank">Ayo ke Bank</a>
						</li>
						<li class="skb">
							<a href="#" title="Sahabat Konsumen Bank">Sahabat Konsumen Bank</a>
						</li>
						<li class="bi">
							<a href="#" title="Bank Indonesia">Bank Indonesia</a>
						</li>
						<li class="maluku">
							<a href="#" title="Pemprov Maluku">Pemprov Maluku</a>
						</li>
						<li class="asbanda">
							<a href="#" title="Asbanda">Asbanda</a>
						</li>
						<li class="ambon">
							<a href="#" title="Pemkot Ambon">Pemkot Ambon</a>
						</li>
					</div>
				</div>
			</div>
		</footer> <!-- [end] FOOTER -->
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/theme1/js/jquery-1.9.0.min.js"><\/script>')</script>

	<!-- Flexslider -->
	<script src="<?php echo base_url()?>assets/theme1/js/jquery.flexslider.min.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		$('#slideshow .flexslider').flexslider({
			animation: "slide",
		});
	});
	</script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>