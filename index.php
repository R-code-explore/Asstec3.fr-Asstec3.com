<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mozilla/5.0 (Unknown; Linux i686) AppleWebKit/538.1 (KHTML, like Gecko) EWB/2.3.80 Safari/538.1(1024x600, 32bpp)') !== false) {
    header('Location: toshiba/index.php');
    exit;
}

$general_css_link = "./styles/general.css";
$page_css_link = "./styles/index.css";
$page_title = "Asstec3 - Informatique - Bureautique - Photocopieur Oise - Cybersécurité Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>
<?php include "./db_actions/detection.php"; ?>

<!-------Banner-------->
<!-------Banner-------->
<div class="banner">

<div class="index_banner">

  <div class="index_background">
    <img src="./assets/0_1.jpg" alt="image présentant les services d'Asstec3">
    <div class="index_bck_filter"></div>
  </div>

  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>

  <div class="index_welcome_content">

      <div class="index_slogan">
        <h3>Connectez-vous à l’excellence<br><strong>Notre expertise digitale à votre service</strong></h3>
      </div>

  </div>

</div>

<div class="model_viewer">
      <model-viewer
      src="./assets/Logo_V9_No_Camera_No_Light.glb"
      ar-modes="webxr scene-viewer quick-look"
      camera-controls
      poster="poster.webp"
      shadow-intensity=".4"
      environment-image="./assets/music_hall_01_1k.hdr"
      camera-orbit="1.163deg 90.11deg 4.776m"
      field-of-view="30deg"
      disable-zoom
      disable-tap
      auto-rotate
      interaction-prompt="none"

      id="model_3D">
</div>
    <script>
var model = document.getElementById("model_3D");
var timer;
model.addEventListener("camera-change", function() {
  clearTimeout(timer);
  timer = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
});
function resetCameraOrbit() {
  model.setAttribute("camera-orbit", "1.163deg 90.11deg 4.776m");
  //model.setAttribute("camera-target", "0m 0m 0m");
  //model.setAttribute("camera-zoom", "1");
  //model.setAttribute("field-of-view", "30deg");
}

model.addEventListener("camera-change", () => {
    console.log("camera-orbit".innerHTML)
})
</script>
</div>

<!--Sections-->
<!--Sections-->

<?php
include "./includes/index/section_01.php";
include "./includes/index/section_02.php";
include "./includes/index/section_03.php";
include "./includes/index/section_04.php";
include "./includes/index/section_05.php";
include "./includes/index/section_06.php";
?>

<!--------------------->
<!--------------------->


<?php include './includes/footer.php'; ?>