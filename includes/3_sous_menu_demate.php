<!--Informatique Menu-->
	<!--Informatique Menu-->
	<div class="submenu" id="demat_submenu">
		<span class="submenu_links">
			<a href="./demat.php#top_demat" class="">• CAPTURE & CLASSEMENT</a>
			<a href="./demat.php#f&f" class="">• FACTURES FOURNISSEURS</a>
			<a href="./demat.php#demat_docs" class="">• DEMATERIALISATION DES DOCUMENTS SORTANTS</a>
			<a href="./demat.php#gestion_docs" class="">• GESTION ELECTRONIQUE DES DOCUMENTS</a>
			<a href="./demat.php#signature" class="">• SIGNATURE ELECTRONIQUE</a>
		</span>
		</span>
	<!--3D Computer Model-->
		<span class="submenu_object" id="demat_3D_object">
			<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
			<model-viewer
			src="./assets/demat_3D.glb"
      		poster="poster.webp"
      		shadow-intensity=".4"
      		environment-image="./assets/evening_meadow_2k.hdr"
      		camera-orbit="90deg 30deg .8m"
      		field-of-view="30deg"
      		disable-zoom
      		disable-tap
      		auto-rotate
      		interaction-prompt="none"

      		id="demat_3D">

			<script>
				var demat_3D = document.getElementById("demat_3D");
				var timer_demat;
				demat_3D.addEventListener("camera-change", function() {
  					clearTimeout(timer_demat);
  					timer_demat = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
				});
				function resetCameraOrbit() {
					demat_3D.setAttribute("camera-orbit", "90deg 180deg 4.776m");
  					//model.setAttribute("camera-target", "0m 0m 0m");
  					//model.setAttribute("camera-zoom", "1");
  					//model.setAttribute("field-of-view", "30deg");
				}

				demat_3D.addEventListener("camera-change", () => {
    				console.log("camera-orbit".innerHTML)
				})
			</script>

		</span>
	<!----->
	</div>
<!----->
<!----->