<?php
        try {
            $bdd=new PDO ('mysql:host=localhost;dbname=bdd','root','');
        }
        catch (Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    ?>                                  
        <?php
        $text=$_POST['textarea'];        
        $bdd->exec('INSERT INTO commentaires(id, auteur,commentaire, date_commentaire) VALUES(\'\',\'unknow\',\'$text\',\'\')');
        echo 'Le jeu a bien été ajouté !';
?>