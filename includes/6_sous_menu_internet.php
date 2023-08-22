<!--Informatique Menu-->
	<!--Informatique Menu-->
	<div class="submenu" id="internet_submenu">
		<span class="submenu_links">
			<a href="./internet.php#ftth" class="">• FIBRE FTTH</a>
			<a href="./internet.php#pro" class="">• FIBRE PRO</a>
			<a href="./internet.php#dediee" class="">• FIBRE DEDIÉE</a>
			<a href="./internet.php#4g" class="">• 4G</a>
		</span>
		</span>
	<!--3D Computer Model-->
		<span class="submenu_object" id="internet_3D_object">
			<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
			<model-viewer
			src="./assets/internet_3D.glb"
      		poster="poster.webp"
      		shadow-intensity=".4"
      		environment-image="./assets/evening_meadow_2k.hdr"
      		camera-orbit="180deg 90deg 3m"
      		field-of-view="30deg"
      		disable-zoom
      		disable-tap
      		auto-rotate
      		interaction-prompt="none"

      		id="internet_3D">

			<script>
				var internet_3D = document.getElementById("internet_3D");
				var timer_internet;
				internet_3D.addEventListener("camera-change", function() {
  					clearTimeout(timer_internet);
  					timer_internet = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
				});
				function resetCameraOrbit() {
					internet_3D.setAttribute("camera-orbit", "90deg 180deg 4.776m");
  					//model.setAttribute("camera-target", "0m 0m 0m");
  					//model.setAttribute("camera-zoom", "1");
  					//model.setAttribute("field-of-view", "30deg");
				}

				internet_3D.addEventListener("camera-change", () => {
    				console.log("camera-orbit".innerHTML)
				})
			</script>

		</span>
	<!----->
	</div>
<!----->
<!----->
