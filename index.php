<?php
session_start();

$json_source=file_get_contents('script/ifa_annuaire.json');
$json_data=json_decode($json_source);

/*echo '<pre>';
print_r($json_data);
echo '</pre>';*/
$pseudo_session = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : null ;
$identifie_session = (isset($_SESSION['identifie'])) ? $_SESSION['identifie'] : null ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="script/index.css">
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/jquery.validate.min.js"></script>
    <script type="text/javascript" src="script/identification.js"></script>
    <script type="text/javascript" src="script/validation.js"></script>
    <script>
        $(window.document).ready(function() {$('#mess_error').hide();});
    </script>
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
        <?php
            if(isset($_POST['valider']) && $_POST['valider']=='envoyer')
            {
                $condition=false;
                if(isset($_POST['pseudo']) && isset($_POST['mdp']) && $_POST['pseudo']!='' && $_POST['mdp']!='')
                {
                    $pseudo=$_POST['pseudo'];
                    $mdp=$_POST['mdp'];

                    foreach ($json_data as $key => $value) 
                    {
                        foreach ($value as $k => $v) 
                        {
                        if($value->pseudo==$pseudo && $value->mdp==$mdp)
                        {
                            $condition=true;
                            $_SESSION['pseudo']=$pseudo;
                            $_SESSION['identifie']=true;
                            break;
                        }
                        }
                        
                    }

                    if($condition==true)
                    {
                        header('Location:annuaire.php');
                    }
                    else
                    {
                        ?> <script type="text/javascript">$('#mess_error').show();</script><?php
                    }
                    
                }
                else
                {
                    echo 'Aucun champ rempli';
                }
            }


            if($identifie_session==null)
            {
        ?>
        <form action="index.php" id="identification" method="post">
            <label for="pseudo" class="left">Pseudo</label><input type="text" name="pseudo" id="pseudo">
            <label for="mdp" class="left">Mot de passe</label><input type="text" name="mdp" id="mdp">
            <input type="submit" value="envoyer" id="submit" name="valider">
        </form>
        <?php
            }
            else
            {
                //echo $identifie_session;
                echo 'ouech gros!';
                echo '<a href="annuaire.php">Annuaire</a>';
            }
        ?>
        <div id="mess_error">Erreur d'identification</div>
    </div>
</section>
</body>
</html>