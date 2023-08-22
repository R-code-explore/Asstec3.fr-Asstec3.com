<!--Informatique Menu-->
	<!--Informatique Menu-->
	<div class="submenu" id="info_submenu">
		<span class="submenu_links">
			<a href="./informatique.php#audit" class="">• AUDIT</a>
			<a href="./informatique.php#poste_travail" class="">• POSTE DE TRAVAIL</a>
			<a href="./informatique.php#infrastructure" class="">• INFRASTRUCTURE</a>
			<a href="./informatique.php#services_01" class="">• SERVICES MANAGEES</a>
			<a href="./informatique.php#cybersec" class="">• CYBERSECURITE</a>
		</span>
		</span>
	<!--3D Computer Model-->
		<span class="submenu_object" id="info_3D_object">
			<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
			<model-viewer
			src="./assets/laptop_02.glb"
      		poster="poster.webp"
      		environment-image="./assets/evening_meadow_2k.hdr"
      		camera-orbit="90deg 90deg .25m"
      		field-of-view="30deg"
      		disable-zoom
      		disable-tap
      		auto-rotate
      		interaction-prompt="none"

      		id="desktop_3D">

			<script>
				var desktop_3D = document.getElementById("desktop_3D");
				var timer_desktop;
				desktop_3D.addEventListener("camera-change", function() {
  					clearTimeout(timer_desktop);
  					timer_desktop = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
				});
				function resetCameraOrbit() {
					desktop_3D.setAttribute("camera-orbit", "90deg 90deg 4.776m");
  					//model.setAttribute("camera-target", "0m 0m 0m");
  					//model.setAttribute("camera-zoom", "1");
  					//model.setAttribute("field-of-view", "30deg");
				}

				desktop_3D.addEventListener("camera-change", () => {
    				console.log("camera-orbit".innerHTML)
				})
			</script>

		</span>
	<!----->
	</div>
<!----->
<!----->