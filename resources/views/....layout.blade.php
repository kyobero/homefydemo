
<!DOCTYPE html>
<html lang="en">
<head>
<title>Homefy</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Homefy Responsive website, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<!-- google fonts -->
	<!-- <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>

    <!-- //header -->
<header class="py-4">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-home" aria-hidden="true"></span>Homefy</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle">Menu</label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="mr-lg-4 mr-3 active"><a href="#">Home</a></li>
				<li class="mr-lg-4 mr-3"><a href="/about">About</a></li>
				<li class="mr-lg-4 mr-3"><a href="services.html">Properties</a></li>
				<li class="mr-lg-4 mr-3"><a href="services.html">Get Mortgage</a></li>
				<li class="mr-lg-4 mr-3">
				<!-- First Tier Drop Down -->
				<!-- <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
				<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
				<input type="checkbox" id="drop-2"/>
				<ul class="inner-ul">
					<li><a href="#about">About</a></li>
					<li><a href="#agents">Agents</a></li>
				<li><a href="#partners">Partners</a></li>
				</ul> -->
				</li>
				<li class="mr-lg-4 mr-3"><a href="properties.html">Contact</a></li>
				<li class="mr-lg-4"><a href="contact.html">FAQ's</a></li>
			</ul>
			<div class="login-icon mt-2">
				<a class="user" href="/login"><span class="fa fa-user-circle-o" aria-hidden="true"></span></a>
			</div>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

        @yield ('content')

</body>
</html>
