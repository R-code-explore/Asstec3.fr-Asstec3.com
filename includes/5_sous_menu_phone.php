<!--Phone Menu-->
	<!--Phone Menu-->
	<div class="submenu" id="telephonie_submenu">
		<span class="submenu_links">
			<a href="./tel_internet.php#tel_voip" class="">• TELEPHONIE VOIP</a>
			<a href="./tel_internet.php#mobile_tel" class="">• TELEPHONIE MOBILE</a>
			<!--<a href="" class="">• STUDIO</a>
			<a href="" class="">• SAFECARE</a>-->
		</span>
	<!--3D Phone Model-->
		<span class="submenu_object">
			<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
			<model-viewer
			src="./assets/phone.glb"
      		poster="poster.webp"
      		shadow-intensity=".4"
      		environment-image="./assets/evening_meadow_2k.hdr"
      		camera-orbit="1.163deg 60deg .5m"
      		field-of-view="30deg"
      		disable-zoom
      		disable-tap
      		auto-rotate
      		interaction-prompt="none"

      		id="phone_3D">

			<script>
				var phone_3D = document.getElementById("phone_3D");
				var timer_phone;
				phone_3D.addEventListener("camera-change", function() {
  					clearTimeout(timer_phone);
  					timer_phone = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
				});
				function resetCameraOrbit() {
					//phone_3D.setAttribute("camera-orbit", "1.163deg 0deg 4.776m");
  					//model.setAttribute("camera-target", "0m 0m 0m");
  					//model.setAttribute("camera-zoom", "1");
  					//model.setAttribute("field-of-view", "30deg");
				}

				phone_3D.addEventListener("camera-change", () => {
    				console.log("camera-orbit".innerHTML)
				})
			</script>

		</span>
	<!----->
	</div>
<!----->
<!----->