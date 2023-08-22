<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/informatique.css";
$page_title = "Dématérialisation - Informatique Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>
<div class="banner">

<video autoplay loop muted playsinline width="100%" height="100%">
    <source src="./assets/Video_demat.mp4" type="video/mp4">
</video>
</div>
<h3 class="intro_description" id="top_demat">Et si vous automatisiez la numérisation, le nommage et le classement de tous vos documents entrants ?</h3>
<style>
    #top_demat{
        margin-top:0;
    }
</style>

<!--Sections-->
<!--Sections-->

<?php

include "./includes/demat/section_01.php";
include "./includes/demat/section_02.php";
include "./includes/demat/section_03.php";
include "./includes/demat/section_04.php";
include "./includes/demat/section_05.php";
include "./includes/demat/section_06.php";
include "./includes/demat/section_07.php";
include "./includes/demat/section_08.php";
include "./includes/demat/section_09.php";

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