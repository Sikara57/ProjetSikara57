<?php
include 'script/utilisateur.php';
$utilisateurs=new SimpleXMLElement($xmlstr);

if(isset($_POST['submit']) && $_POST['submit']=='envoyer')
{
    if(isset($_POST['pseudo']) && isset($_POST['mdp']) && $_POST['pseudo']!='' && $_POST['mdp']!='')
    {
        $pseudo=$_POST['pseudo'];
        $mdp=$_POST['mdp'];
        foreach ($utilisateurs as $key => $value) 
        {
            if ($value->pseudo==$pseudo && $value->mdp==$mdp) 
            {
                $condition=true;
            }
        }

        if($condition==true)
        {
            header('Location:admin.php');
        }
        else
        {
            echo 'c\'est faux';
        }
        
    }
    else
    {
        echo 'c\'est vide connard';
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="script/index.css">
    <script src="script/jquery-3.2.1.min.js"></script>
    <script src="script/jquery.validate.min.js"></script>
    <script src="script/validation.js"></script>
    <title>Accueil</title>
</head>
<body>
<section id="container">
    <header class="hidden">
        <h2>Identification</h2>
    </header>
    <img id="bando" src="img/ifa-bando.png" alt="IFATECH">
    <img id="pano" src="img/ifa-pano.jpg" alt="IFA dev">
    <div id="log">
        <form action="index.php" id="identification" method="post">
            <label for="pseudo" class="left">Pseudo</label><input type="text" name="pseudo" id="pseudo">
            <label for="mdp" class="left">Mot de passe</label><input type="text" name="mdp" id="mdp">
            <input type="submit" value="envoyer" name="submit">
        </form>
    </div>
</section>
</body>
</html>