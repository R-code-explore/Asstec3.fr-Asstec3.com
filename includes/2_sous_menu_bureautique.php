<!--Informatique Menu-->
	<!--Informatique Menu-->
	<div class="submenu" id="print_submenu">
		<span class="submenu_links">
			<a href="./bureautique.php#printers" class="">• IMPRIMANTES</a>
			<a href="./bureautique.php#multifonctions" class="">• MULTIFONCTIONS</a>
			<a href="./bureautique.php#grands_formats" class="">• GRANDS FORMATS</a>
			<a href="./bureautique.php#gestionss" class="">• GESTION DELEGUEE DES<br>SERVICES D'IMPRESSIONS MPS</a>
		</span>
		</span>
	<!--3D Computer Model-->
		<span class="submenu_object" id="print_3D_object">
			<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
			<model-viewer
			src="./assets/toshiba_3D.glb"
      		poster="poster.webp"
      		shadow-intensity=".4"
      		environment-image="./assets/evening_meadow_2k.hdr"
      		camera-orbit="90deg 80deg 2.6m"
      		field-of-view="30deg"
      		disable-zoom
      		disable-tap
      		auto-rotate
      		interaction-prompt="none"

      		id="print_3D">

			<script>
				var print_3D = document.getElementById("print_3D");
				var timer_print;
				print_3D.addEventListener("camera-change", function() {
  					clearTimeout(timer_print);
  					timer_print = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
				});
				function resetCameraOrbit() {
					//print_3D.setAttribute("camera-orbit", "90deg 90deg 4.776m");
  					//model.setAttribute("camera-target", "0m 0m 0m");
  					//model.setAttribute("camera-zoom", "1");
  					//model.setAttribute("field-of-view", "30deg");
				}

				print_3D.addEventListener("camera-change", () => {
    				console.log("camera-orbit".innerHTML)
				})
			</script>

		</span>
	<!----->
	</div>
<!----->
<!----->