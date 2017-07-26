<?php
session_start();
if($_SESSION['identifie']==true)
{
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../script/general.css">
        <link rel="stylesheet" href="script/cours.css">

        <script type="text/javascript" src="../lib/jquery.js"></script>
        <script type="text/javascript" src="script/cours.js"></script>
        <title>Cours</title>
    </head>
    <body>
        <nav>
            <img src="../img/ifa-bando.png" class="annuaire_logo" alt="IFA TECH">
            <ul id="liste_cours">
                <a href="../index.php" class='lien' id="home" ><li>HOME</li></a>
                <a href="#" class='lien' id="hide_all" ><li>MASQUER</li></a>
                <a id="lien_html" href="#" class="lien"><li>HTML / CSS</li></a>
                <a id="lien_js" href="#" class="lien"><li>Javascript</li></a>
                <a id="lien_php" href="#" class="lien"><li>PHP</li></a>
            </ul>
            <ul id="sous_categorie">

            </ul>
        </nav>
        <section class="sec">
            <header class="hidden">
                <h2>HTML CSS</h2>
            </header>
            <article id="_html_cours">
                <h3><span>Cours</span>&nbsp;<span>HTML</span></h3>
            </article>
            <article id="_html_exo">
                _html_exo
            </article>
        </section>
        <section class="sec">
            <header class="hidden">
                <h2>Javascript</h2>
            </header>
            <article id="_js_cours">
                _js_cours
            </article>
            <article id="_js_exo">
                _js_exo
            </article>
        </section>
        <section class="sec">
            <header class="hidden">
                <h2>PHP</h2>
            </header>
            <article id="_php_cours">
                _php_cours
            </article>
            <article id="_php_exo">
                _php_exo
            </article>
        </section>
    </body>
    </html>
<?php
}
else
{
    header('Location:index.php');
}
?>