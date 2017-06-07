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
                     
                <input type="checkbox" name="coche[]" value=" <?php echo($id);?> " >
                <commentaire>
                    <?php echo $donnees['commentaire'];?> <br \>
                </commentaire>
                <date>
                Le <?php echo $donnees['date_commentaire_fr'];?> 
                <br \>
                </date> 
            <?php } ?>
            
                
             <input type="submit" value="Envoyer" />
            </form>
           
            <br \>
            <?php $req->closeCursor();?>
    
            </div>
    <footer>
            <?php include("footer.php"); ?>
        </footer>
        </body>
    </html> 





















