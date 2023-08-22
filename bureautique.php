<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/informatique.css";
$page_title = "Bureautique - Informatique Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>

<!-------Banner-------->
<!-------Banner-------->
<div class="banner">

<video autoplay loop muted playsinline width="100%" height="100%">
    <source src="./assets/video_impression.mp4" type="video/mp4">
</video>

</div>
<div class="ident_section">
        <div id="printers"></div>
    </div>
<h3 class="intro_description">Grâce à ses partenaires, ASSTEC3 se maintient au cœur de l’innovation profitant des meilleurs services de recherche et développement dans le métier de l’impression.</h3>

<!--Sections-->
<!--Sections-->

<?php

include "./includes/impr/section_01.php";
include "./includes/impr/section_02.php";
include "./includes/impr/section_03.php";
include "./includes/impr/section_04.php";
include "./includes/impr/section_05.php";

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
        margin: 40px auto;
        transition: .2s ease-in-out;
    }
    @media (min-width:1700px) {
        .intro_description{width: 70%; transition: .2s ease-in-out;}
    }
</style>