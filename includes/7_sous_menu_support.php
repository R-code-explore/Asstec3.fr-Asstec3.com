<!--Informatique Menu-->
	<!--Informatique Menu-->
	<div class="submenu" id="support_submenu">
		</span>
	<!--3D Computer Model-->
		<span class="submenu_object" id="support_3D_object">
			<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
			<model-viewer
			src="./assets/support_3D.glb"
      		poster="poster.webp"
      		shadow-intensity=".4"
      		environment-image="./assets/evening_meadow_2k.hdr"
      		camera-orbit="45deg 90deg .8m"
      		field-of-view="30deg"
      		disable-zoom
      		disable-tap
      		auto-rotate
      		interaction-prompt="none"

      		id="support_3D">

			<script>
				var support_3D = document.getElementById("support_3D");
				var timer_support;
				support_3D.addEventListener("camera-change", function() {
  					clearTimeout(timer_support);
  					timer_support = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
				});
				function resetCameraOrbit() {
					//support_3D.setAttribute("camera-orbit", "90deg 90deg 4.776m");
  					//model.setAttribute("camera-target", "0m 0m 0m");
  					//model.setAttribute("camera-zoom", "1");
  					//model.setAttribute("field-of-view", "30deg");
				}

				support_3D.addEventListener("camera-change", () => {
    				console.log("camera-orbit".innerHTML)
				})
			</script>

		</span>
	<!----->
	</div>
<!----->
<!----->