<?php
session_start();
if($_SESSION['identifie']==true)
{

    $json_source=file_get_contents('script/ifa_annuaire.json');
    $json_data=json_decode($json_source);
?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <title>Annuaire</title>
        <link rel="stylesheet" href="script/annuaire.css">

        <script type="text/javascript" src="../lib/jquery.js"></script>
        <script type="text/javascript" src="script/script.js"></script>
    </head>
    <body>
        <nav>
            <img src="../img/ifa-bando.png" id="annuaire_logo" alt="IFA TECH">
            <ul id="liste_contact">
                <a href="../index.php" class='lien' id="home" ><li>HOME</li></a>
                <a href="#" class='lien' id="hide_all" ><li>MASQUER</li></a>
            </ul>
        </nav>
        
        <article id='detail_usr'>
        <img id="icone" src="../img/triangle.png" alt="Icone">
        <div class="usr"></div>
        </article>

    </body>
    </html>
<?php
}
else
{
    header('Location:index.php');
}
?>