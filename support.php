<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/informatique.css";
$page_title = "Téléphonie & internet - Informatique Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>
<h3 class="intro_description"></h3>

<div class="support_title">
    <h3>AnyDesk est le logiciel de prise en main distante, que nous utilisons et proposons à nos clients.
    <br>
    <strong>Pour le télécharger</strong>, choissisez simplement votre système d'exploitation ci-dessous.
    </h3>
    <img src="./assets/anydesk.png" alt="Logo du logiciel Anydesk, utilisé et proposé par Asstec3 afin d'acompagner ses clients dans un support informatique et bureautique distant">
</div>

<div class="to_the_bottom">
    <img src="./assets/to_the_bottom.png">
</div>

<div class="anydesk_download_sections">
    <a href="https://get.anydesk.com/trVNjkBP/AnyDesk_Asstec3_Client.exe" target="_blank" class="download_section">
        <p>Windows</p>
        <img src="./assets/windows.png">
    </a>
    <a href="https://flathub.org/apps/com.anydesk.Anydesk" target="_blank" class="download_section">
        <p>Linux</p>
        <img src="./assets/linux.png">
    </a>
    <a href="https://get.anydesk.com/d7rNEErA/AnyDesk_Asstec3_Client.dmg" target="_blank" class="download_section">
        <p>Macbook / iMac</p>
        <img src="./assets/mac.png">
    </a>
</div>

<h3 class="intro_description"><br><br><br></h3>

<style>
    .support_title{
        display: block;
        width: 90%;
        margin: 40px auto;
    }
    .support_title h3{
        text-align: center;
        font-family: 'Montserrat' , sans-serif;
        font-size: 16px;
        font-weight: 400;
    }
    .support_title img{
        display: block;
        width: 50%;
        max-width: 200px;
        margin:auto;
    }
    @media (min-width:1200px) {
        .support_title{
            display: flex;
            justify-content: space-between;
        }
    }

    @media (min-width:1700px) {
        .support_title{
            width: 70%;
            max-width: 1330px;
        }
        .support_title img{
            margin: 0;
        }
    }

    .to_the_bottom{
        display: block;
        width: 90%;
        margin: 40px auto;
    }
    .to_the_bottom img{
        display: block;
        width: 30%;
        max-width: 150px;
        margin: auto;
    }
    @media (min-width:1200px){
        .to_the_bottom{
        display: none;
    }
    }

    .anydesk_download_sections{
        display: block;
        width: 90%;
        margin: 40px auto;
    }
    .download_section p{
        font-family: 'Montserrat' , sans-serif;
        font-size: 16px;
        text-align: center;
    }
    .download_section img{
        display: block;
        width: 50%;
        max-width: 200px;
        margin: auto;
        transition: .2s ease-in-out;
    }

    .download_section img:hover{
        box-shadow: 10px 7px 24px -4px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 7px 24px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 7px 24px -4px rgba(0,0,0,0.75);
        transition: .2s ease-in-out;
    }
    @media (min-width:1200px) {
        .anydesk_download_sections{
            width: 40%;
            max-width: 760px;
            display: flex;
            justify-content: space-between;
        }
        .download_section img:hover{
            border-radius: 10px;
            transition: .2s ease-in-out;
        }
    }
</style>

<!--------------------->
<!--------------------->

<script src="./js/info.js"></script>
<?php include './includes/footer.php'; ?>