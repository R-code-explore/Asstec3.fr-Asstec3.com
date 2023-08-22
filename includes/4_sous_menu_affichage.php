<!--Informatique Menu-->
	<!--Informatique Menu-->
	<div class="submenu" id="display_submenu">
		<span class="submenu_links">
			<a href="./display.php#suppor_display" class="">• SUPPORTS INTERACTIFS</a>
			<a href="./display.php#display_gestion" class="">• GESTION DELEGUEE DES CONTENUS</a>
		</span>
		</span>
	<!--3D Computer Model-->
		<span class="submenu_object" id="display_3D_object">
			<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
			<model-viewer
			src="./assets/Dynamic_Display.glb"
      		poster="poster.webp"
      		shadow-intensity=".4"
      		environment-image="./assets/evening_meadow_2k.hdr"
      		camera-orbit="180deg 90deg 2.6m"
      		field-of-view="30deg"
      		disable-zoom
      		disable-tap
      		auto-rotate
      		interaction-prompt="none"

      		id="display_3D">

			<script>
				var display_3D = document.getElementById("display_3D");
				var timer_display;
				display_3D.addEventListener("camera-change", function() {
  					clearTimeout(timer_display);
  					timer_display = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
				});
				function resetCameraOrbit() {
					//display_3D.setAttribute("camera-orbit", "90deg 180deg 4.776m");
  					//model.setAttribute("camera-target", "0m 0m 0m");
  					//model.setAttribute("camera-zoom", "1");
  					//model.setAttribute("field-of-view", "30deg");
				}

				display_3D.addEventListener("camera-change", () => {
    				console.log("camera-orbit".innerHTML)
				})
			</script>

		</span>
	<!----->
	</div>
<!----->
<!----->