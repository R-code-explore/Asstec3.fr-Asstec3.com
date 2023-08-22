<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/informatique.css";
$page_title = "Informatique - Cybersécurité Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>

<!-------Banner-------->
<!-------Banner-------->
<div class="banner">

<video autoplay loop muted playsinline width="100%" height="100%">
    <source src="./assets/video_informatique.mp4" type="video/mp4">
</video>

</div>

<!--Sections-->
<!--Sections-->

<?php

include "./includes/info/section_01.php";
include "./includes/info/section_02.php";
include "./includes/info/section_03.php";
include "./includes/info/section_04.php";
include "./includes/info/section_05.php";
include "./includes/info/section_06.php";
include "./includes/info/section_07.php";
include "./includes/info/section_08.php";
include "./includes/info/section_09.php";
include "./includes/info/section_10.php";
include "./includes/info/section_11.php";
include "./includes/info/section_12.php";
include "./includes/info/section_13.php";

?>

<!--------------------->
<!--------------------->

<script src="./js/info.js"></script>
<?php include './includes/footer.php'; ?>