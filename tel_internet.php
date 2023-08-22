<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/informatique.css";
$page_title = "Téléphonie & internet - Informatique Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>

<!-------Banner-------->
<div class="banner">

<video autoplay loop muted playsinline width="100%" height="100%">
    <source src="./assets/video_telephonie.mp4" type="video/mp4">
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
include "./includes/telephonie/telephonie_hebergee/section_01.php";
include "./includes/telephonie/telephonie_hebergee/section_02.php";
include "./includes/telephonie/telephonie_hebergee/section_03.php";
include "./includes/telephonie/telephonie_hebergee/section_04.php";
include "./includes/telephonie/telephonie_hebergee/section_05.php";
?>
<h3 class="intro_description"></h3>

<?php
include "./includes/telephonie/trunk_sip/section_01.php";
include "./includes/telephonie/trunk_sip/section_02.php";
include "./includes/telephonie/trunk_sip/section_03.php";
include "./includes/telephonie/trunk_sip/section_04.php";
include "./includes/telephonie/trunk_sip/section_05.php";
include "./includes/telephonie/trunk_sip/section_06.php";
include "./includes/telephonie/trunk_sip/section_07.php";
include "./includes/telephonie/trunk_sip/section_08.php";
include "./includes/telephonie/trunk_sip/section_09.php";
include "./includes/telephonie/trunk_sip/section_10.php";
?>
<h3 class="intro_description"></h3>
<?php
include "./includes/telephonie/telephonie_mobile/section_01.php";
include "./includes/telephonie/telephonie_mobile/section_02.php";
include "./includes/telephonie/telephonie_mobile/section_03.php";
include "./includes/telephonie/telephonie_mobile/section_04.php";
include "./includes/telephonie/telephonie_mobile/section_05.php";
include "./includes/telephonie/telephonie_mobile/section_06.php";
include "./includes/telephonie/telephonie_mobile/section_07.php";
?>
<h3 class="intro_description"></h3>

<!--------------------->
<!--------------------->

<script src="./js/info.js"></script>
<?php include './includes/footer.php'; ?>