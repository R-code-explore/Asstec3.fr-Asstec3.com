<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/informatique.css";
$page_title = "Téléphonie & internet - Informatique Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>

<!-------Banner-------->
<div class="banner">

<video autoplay loop muted playsinline width="100%" height="100%">
    <source src="./assets/video_page_internet.mp4" type="video/mp4">
</video>
</div>
<style>
    #tel_inter_title{margin-top:0px;}
</style>
<style>
    .intro_description{
        font-size: 24px;
        font-family: 'Montserrat' , sans-serif;
        text-align: center;
        font-weight: 400;
        display: block;
        width: 90%;
        margin: 80px auto;
        transition: .2s ease-in-out;
    }
    @media (min-width:1700px) {
        .intro_description{width: 70%; transition: .2s ease-in-out;}
    }
</style>

<!-------Banner-------->

<!--Sections-->
<!--Sections-->

<?php
include "./includes/internet/fibre_ftth/section_01.php";
include "./includes/internet/fibre_ftth/section_02.php";
?>
<h3 class="intro_description"></h3>

<?php
include "./includes/internet/fibre_pro/section_01.php";
include "./includes/internet/fibre_pro/section_02.php";
?>
<h3 class="intro_description"></h3>

<?php
include "./includes/internet/fibre_dediee/section_01.php";
?>
<h3 class="intro_description"></h3>

<?php
include "./includes/internet/4g/section_01.php";
?>
<h3 class="intro_description"></h3>

<!--------------------->
<!--------------------->

<script src="./js/info.js"></script>
<?php include './includes/footer.php'; ?>