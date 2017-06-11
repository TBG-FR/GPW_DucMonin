<!DOCTYPE html>
<html>  

<head>
        <meta charset="utf-8">

        <title>Maçonnerie - Ducrozet-Moninot</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="globalstyle.css">
        <link rel="stylesheet" href="style.css">

    </head>
    
<body>
    <a class="btn btn-default" href="index.php" role="link-button">Retour à l'accueil</a>
    <?php include("admin.php"); ?>
    <div id="admin">
<?php 
            try {
                $bdd=new PDO ('mysql:host=localhost;dbname=bdd','root','');
            }
            catch (Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

            $req=$bdd->query('SELECT id,commentaire,DATE_FORMAT(date_commentaire,\'%d/%m/%Y\') AS date_commentaire_fr FROM commentaires ORDER BY date_commentaire DESC');?>
            
            
    
            <?php while($donnees = $req->fetch()) 
            { ?>
                 <form action ="checkbox.php" method="post">
                <?php 
                $id=$donnees['id'];?>
                <section id="commentaireside">
                <input type="checkbox" name="coche[]" value=" <?php echo($id);?> " >
                    <?php echo $donnees['commentaire'];?> <br \>
                </section>
                <date>
                Le <?php echo $donnees['date_commentaire_fr'];?> 
                <br \>
                </date> 
            <?php } ?>
            
                <section id="boutonenvoi">
             <input type="submit" value="Choisir commentaires à afficher" />
                     </section>
            </form>
           
            <br \>
            <?php $req->closeCursor();?>
            </div>
    <footer>
            <?php include("footer.php"); ?>
        </footer>
        </body>
    </html> 