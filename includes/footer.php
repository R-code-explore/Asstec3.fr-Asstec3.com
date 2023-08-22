<footer id="footer">
	<div class="contact">
		<div class="contact_info">
			<p><strong>Téléphone: </strong><a href="tel:+33139374250">01 39 37 42 50</a></p>
			<br>
			<p><strong>Contact: </strong><br>contact@asstec3.fr</p>
			<br>
			<p><strong>Support Technique: </strong><br>support@asstec3.fr</p>
			<br>
			<p><strong>Adresse: </strong><br>326 rue Henri Becquerel,<br>60230 Chambly</p>
			<br>
			<p><strong>Nos horaires:</strong>
				<br>
				<br>
				<strong>Lundi au Jeudi</strong> : 8h30 - 12h30 / 14h00 - 18h00
				<br><br>
				<strong>Vendredi</strong> : 8h30 - 12h30 / 14h00 - 17h00
			</p>
		</div>
		<div class="contact_map">
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer></script>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d326.15644615149154!2d2.250555!3d49.157833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e65a6f1ea9a325%3A0x7789cd751334d1d7!2sASSTEC%203!5e0!3m2!1sfr!2sus!4v1681311407703!5m2!1sfr!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
	<div class="support">
		<h5 class="support_mess">Une assistance de qualité<br>pour vous accompagner</h5>
		<a href="mailto:contact@asstec3.fr" class="contact_btn">Contactez-nous</a>
	</div>
	<p class="copyright">Copyright | AsstecIII, Tous droits réservés</p>
	<p class="copyright_2"><strong>Cette application web a été réalisée par nos équipes</strong></p>
</footer>

<script src="./js/desktop_menu.js"></script>
<div class="cursor" id="cursor"></div>
<style>
    .cursor{
	display: none;
	position: absolute;
	width: 10px;
	height: 10px;
	background: none;
	border-radius: 50%;
	box-shadow: 0 0 10px #ffcc23,
	0 0 20px #ffcc23,
	0 0 30px #ffcc23,
	0 0 40px #ffcc23,
	0 0 50px #ffcc23,
	0 0 60px #ffcc23,
	0 0 70px #ffcc23,
	0 0 80px #ffcc23,
	0 0 90px #ffcc23,
	0 0 100px #ffcc23,
	0 0 110px #ffcc23,
	0 0 120px #ffcc23,
	0 0 130px #ffcc23;
	box-shadow: 0 0 10px #ffe283,
	0 0 20px #ffdf74,
	0 0 30px #ffe07b,
	0 0 40px #ffe17e inset;
}
</style>
<script>
    let cursor = document.getElementById("cursor");

    document.addEventListener('mousemove', e => {
        cursor.setAttribute("style", "top: "+(e.pageY - 5)+"px; left: "+(e.pageX - 5)+"px;")
    })
</script>
<script src="./js/index_section.js"></script>

<!--To the top BTN-->

<button id="back-to-top-btn"><i class="fa fa-chevron-up"></i></button>
<style>
	#back-to-top-btn {
  display: none;
  position: fixed;
  bottom: 40px;
  right: 40px;
  z-index: 99;
  background-color: #FFC000;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  transition: opacity 0.2s;
}

#back-to-top-btn:hover {
  opacity: 0.8;
}
</style>
<script>
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementById("back-to-top-btn").style.display = "block";
  } else {
    document.getElementById("back-to-top-btn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.body.transition = ".4s ease-in-out";
  document.documentElement.scrollTop = 0;
  document.documentElement.transition = ".4s ease-in-out";
}

document.getElementById("back-to-top-btn").addEventListener("click", topFunction);

function smoothScroll(){
	$('a[href^="#"]').on('click', function(event) {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
}

$(document).ready(function() {
	smoothScroll();
  });
</script>

<!---->

</body>
</html>