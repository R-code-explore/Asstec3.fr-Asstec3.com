<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/informatique.css";
$page_title = "Affichage Dynamique - Informatique Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>

<div class="banner">
    <video autoplay loop muted playsinline width="100%" height="100%">
        <source src="./assets/video-ecran-dynamique.mp4" type="video/mp4">
    </video>
</div>

<!--Sections-->
<!--Sections-->

<?php

include "./includes/display/section_01.php";
include "./includes/display/section_02.php";
include "./includes/display/section_03.php";

?>

<!--------------------->
<!--------------------->

<script src="./js/info.js"></script>
<?php include './includes/footer.php'; ?>

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