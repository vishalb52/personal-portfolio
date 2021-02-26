<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">






	<link rel="stylesheet" href="assets/style.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
	






	<link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">








	<title>Portfolio website</title>
</head>

<body>
	<!--===== HEADER =====-->
	<header class="l-header">
		<nav class="nav bd-grid">
			<div>
				<a href="#" class="nav__logo"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADVklEQVRoQ+2Z27FMQRSG/xOAWwSIABEgAgSg8MoDIkAEeOAVJQBEgAgQASJwC4D6VPdU756+rLV3z8yZqtNVUzNnpnv1+v916X/3OdCej4M9919HAHYdwZEROC/piiTez4T3FN9nSd8kfZD0URJ/Lx5LAeDoXUlXg9MehwDzVtLTAMyzdjV3LoCTkh5Iujdr1/VFTyQ9kvTTa28OANh+IQkQIwfO3wpRMdv1Ang8kPWak0TjvhWBFQBswzrsb2O8DCC6KWUF8GaLzkeCAEFKNYcFACGl0+xi0KGajaIHgJSB/V2Oa63CbgEg779uoNt4yaAOztZabAsAOXjDu9uG5ldTqQaAExb2D9MgCpzek1EDMLpwXwUNhP6JGogURTfxolBPd9jipH5oBQD7RCGOd5IuSTrhDAnrcG6NuYId7JO2NSDYIArdCMDIp2TWrwAGxtjgogHEd0k3A+uG6asp7AFgXiWyLuQqtpRChAmhlrKfnsAAxLkY/rjRl2AcuQzQJQMg7JGnFhKD9F6NEgAkLro+Dk7DpQ7NBQMA9FeNzOIjJekDu3FcnpEKcx3O11EX75MvaQCkUTMCfzMrrbPimaTrYf5rSXeMnlvXkUo/Wv6UnLMCwInbmfHnBhDedU1/lgD4LelYBuCPpOOdKHjXuQHQb9NefKqiQ7yORFyedbkioNOl9VksYtpg2utrRexNhQjAsy4vYm4z+K5ZxHkbXeu9yXprMeZZZV03q412Fxk7zYhpXTJLRVxSohhCTA25jDIgI885wCbpErTQRFfVenxeyHFPAAAGkTYaTLzZQ7ZMCjVsjr5KBeb/r2sAcj1UI42CBwhPTXxmsFFNfeJA7HCwGyV1znRpP5ecxjBOeOWzITtmTYmKeO2apSUTrFGY5ZFzUZH9Vgrx22GJQpX9HgB+zw8SJ3FDpjfVcO9eCA92mUrV1InUWAAwNz9QhlDbMUKr7t7FWgFQD7TJc9vwXBKijfQddrkbi5pHy/RxcxN4YJ7n4a7zliIuObjJmujmfO6QNYXydRz13A5YrlgsUUImw7rl/mhiby6AaIQ8ZWOKzXtq099pDqRllCEWsEMBpMYAwyv+mzUveAoThtFOODzb6XTTpRFwMzZ6wRGA0Yx67e19BP4BGu2nMQTUHFIAAAAASUVORK5CYII=" /><i><b>Hey there!!!</b></i></a>
			</div>

			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
					<li class="nav__item"><a href="#about" class="nav__link">About</a></li>
					<li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
					<li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
					<li class="nav__item"><a href="#contact" class="nav__link">Certifications</a></li>
				</ul>
			</div>


			<div class="nav__toggle" id="nav-toggle">
				<i class='bx bxs-down-arrow-square bx-fade-down'></i>

				<!--<a href="#about">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAABEklEQVRYR+2Y7Q3CIBCGn27gKDqBuoEbqJOom+gE6gTqBo7gCI5gzhjTED4OKLWJ3N/C3dMXXui1YWDRDIyHChRaEZ9CM2AaSpD4/AzcbXNdQHtgmVhMO01qrM3BNqAFcNRmzRw3MZWyAW2BTWYh7fQdIPW+UYEM6YoodAOun0KxziwC1E4au/8qUMhtVaGqkCjwM5c9gbnrlvaszQi4AGPLmOxNHQvlgzHVffOm3GVaqBBMZ0CSKASlgekUyAelhekcyAYVA1MEqA318LjJZcJsl7kSy54SIJu1fad1MaDQFdG7Qv8FJJ+hctT3Eao2SED6aBQPwMp8a18rLY6RprFEnGJb6RIQqpz1d0xIpsEp9AI3F18lI7KqXAAAAABJRU5ErkJggg=="/></a>-->

			</div>
		</nav>
	</header>


	<main class="l-main">
		<!--===== HOME =====-->
		<section class="home bd-grid" id="home">
			<div class="home__data">

				<h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Vishal</span><br> Web Designer</h1>

				<!--<a href="#" class="button">Donwload CV</a>-->
				<a href="https://drive.google.com/file/d/1hCggKoEhv6H_qoas1YWA3d4DG0x6Ohtv/view?usp=sharing" target="_blank">
					<button class="glow-on-hover" type="button">Download CV</button>
				</a>
			</div>

			<div class="home__social">
				<a href="https://www.linkedin.com/in/vishal-kumar-b2974518b" target="_blank" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
				<a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUCX_Q3_UIPMdDqMtxvgL1WsA&e=ATMBfnwseHlyeINxyGvauZrjj06ybXpyRVE4FQe9BLHwqqHhNPhERfjkgGrRyczUoRWNEXtiNOXqSAYeGb5J1fFyzUJ9rms99czxywE&s=1" class="home__social-icon" target="_blank"><i class='bx bxl-youtube' ></i></a>
				<a href="https://github.com/vishalb52" target="_blank" class="home__social-icon"><i class='bx bxl-github'></i></a>
				<a href="https://dev.to/vishalb52" target="_blank" class="home__social-icon"><i class='bx bxl-dev-to'></i></a>
				<a href="https://vishalbhardwajjj45@outlook.com" target="_blank" class="home__social-icon"><i class='bx bxl-microsoft'></i></a>
			</div>

			<div class="home__img ">
				<img class="pfmg" src="assets/img/profile1.jpg" alt="">
			</div>
		</section>

		<!--===== ABOUT =====-->
		<section class="about section " id="about">
			<h2 style="color: #000015" class="section-title">About</h2>

			<div class="about__container bd-grid">
				<div class="about__img">
					<a href="https://www.youtube.com/watch?v=m4Zvikh4w78" target="_blank"><img class="inverted" src="assets/img/about.jpeg" alt=""></a>
				</div>

				<div>
					<h2 class="about__subtitle">I'am <b>Vishal</b></h2>
					<p class="about__text">I am a <i>sophomore</i> in <b>SRM University</b> I have been designing or developing fronted websites in Hackathons and various projects.
						<br>I am of the leading member of <b>CoffeeCodeCo</b> team
						<br>I enjoy a good cup of tea,watching movies, listening music and playing COD mobile game.</p>
				</div>
			</div>
		</section>

		<!--===== SKILLS =====-->
		<section class="skills section" id="skills">
			<h2 style="color: #000015" class="section-title">Skills</h2>

			<div class="skills__container bd-grid">
				<div>
					<h2 style="color: #000015" class="skills__subtitle">Technical Skills</h2>
					<p class="skills__text"><i><b>I am a beginner in Data Science field.</b></i>
						<br>Some of the Web Development technical skills are listed below</p>
					<div class="skills__data">
						<div class="skills__names">
							<i class='bx bxl-html5 skills__icon'></i>
							<span class="skills__name">HTML5</span>
						</div>
						<div class="skills__bar skills__html">

						</div>
						<div>
							<span class="skills__percentage">95%</span>
						</div>
					</div>
					<div class="skills__data">
						<div class="skills__names">
							<i class='bx bxl-css3 skills__icon'></i>
							<span class="skills__name">CSS3</span>
						</div>
						<div class="skills__bar skills__css">

						</div>
						<div>
							<span class="skills__percentage">85%</span>
						</div>
					</div>
					<div class="skills__data">
						<div class="skills__names">
							<i class='bx bxl-javascript skills__icon'></i>
							<span class="skills__name">JAVASCRIPT</span>
						</div>
						<div class="skills__bar skills__js">

						</div>
						<div>
							<span class="skills__percentage">65%</span>
						</div>
					</div>
					<div class="skills__data">
						<div class="skills__names">
							<i class='bx bxs-paint skills__icon'></i>
							<span class="skills__name">UX/UI</span>
						</div>
						<div class="skills__bar skills__ux">

						</div>
						<div>
							<span class="skills__percentage">85%</span>
						</div>
					</div>
				</div>

				<div>
					<img class="inverted" src="assets/img/work3.jpg" alt="" class="skills__img">
				</div>
			</div>
		</section>

		<!--===== WORK =====-->
		<section class="work section" id="work">
			<h2 style="color: #000015" class="section-title">Work</h2>

			<div class="work__container bd-grid inverted">
				<div class="work__img ">
					<img src="assets/img/work11.jpg" alt="">
				</div>
				<div class="work__img">
					<img src="assets/img/work2.jpg" alt="">
				</div>
				<div class="work__img">
					<img src="assets/img/work3.jpg" alt="">
				</div>
				<div class="work__img">
					<img src="assets/img/work4.png" alt="">
				</div>
				<div class="work__img">
					<img src="assets/img/work5.jpg" alt="">
				</div>
				<div class="work__img">
					<img src="assets/img/work6.jpg" alt="">
				</div>
			</div>
		</section>

		<!--===== CONTACT =====-->
		<section class="contact section" id="contact">
			<h2 style="color: #000015" class="section-title">Certifications/Achievements</h2>


			<div class="contact__container bd-grid">

				<div class="row">
					<div class="column">
						<img src="assets/img/a1.jpeg" alt="Snow" style="width:100%">
					</div>
					<div class="column">
						<img src="assets/img/a2.jpg" alt="Forest" style="width:100%">
					</div>
					<div class="column">
						<img src="assets/img/a3.png" alt="Mountains" style="width:100%">
					</div>
				</div>




			</div>
		</section>
	</main>


	<!--===== FOOTER =====-->
	<footer class="footer">
		<p class="footer__title"><i><b>VISHAL KUMAR</b></i></p>
		<div class="footer__social">
			<a class="fbc" href="https://www.facebook.com/vishalbh52/" target="_blank">
				<i class="fa fa-facebook-square fa-3x"></i></a>
			<style>
				.fbc {
					padding: 1.5rem;
				}

			</style>
			<a class="inc" href="https://www.instagram.com/vishal_b52/" target="_blank">
				<i class="fa fa-instagram fa-3x"></i></a>
			<style>
				.inc {
					padding: 1.5rem;
					color: hotpink;
				}

			</style>
			<a class="gcc" href="https://plus.google.com" target="_blank">
				<i class="fa fa-google-plus fa-3x"></i></a>
			<style>
				.gcc {
					padding: 1.5rem;
					color: #F80000;
				}

			</style>
		</div>
		<p>&#169; 2021 copyright all right reserved</p>
	</footer>



	<!--===== SCROLL REVEAL =====-->
	<script src="https://unpkg.com/scrollreveal"></script>

	<!--===== MAIN JS =====-->
	<script src="main.js"></script>


	<script>
		"use strict";

		! function() {
			var t = window.driftt = window.drift = window.driftt || [];
			if (!t.init) {
				if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
				t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
					t.factory = function(e) {
						return function() {
							var n = Array.prototype.slice.call(arguments);
							return n.unshift(e), t.push(n), t;
						};
					}, t.methods.forEach(function(e) {
						t[e] = t.factory(e);
					}), t.load = function(t) {
						var e = 3e5,
							n = Math.ceil(new Date() / e) * e,
							o = document.createElement("script");
						o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
						var i = document.getElementsByTagName("script")[0];
						i.parentNode.insertBefore(o, i);
					};
			}
		}();
		drift.SNIPPET_VERSION = '0.3.1';
		drift.load('y3ppieshwx86');

	</script>
</body>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

</html>
