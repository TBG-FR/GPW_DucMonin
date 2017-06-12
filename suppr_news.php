<<<<<<< HEAD
<?php 
            try {
                $bdd=new PDO ('mysql:host=localhost;dbname=bdd','root','');
            }
            catch (Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

            $req=$bdd->query('SELECT id FROM news');
?>

<?php 
 while($donnees = $req->fetch())
            {
            ?>
            <?php
     $id=$donnees['id'];
     echo $id;
     echo $_GET['$id'] ;
     if( isset( $_GET[$id] ) ) {
         
         $req = $bdd->prepare('DELETE FROM news WHERE id= :id');
        $req->execute(array(
            'id' => $donnees['id']
        )); 
         echo $donnees['id'];
         
     }
     else {
         //echo $donnees['id'];
     }
    ?>
            <?php
            }
            $req->closeCursor();
            ?>

=======
<?php 
            try {
                $bdd=new PDO ('mysql:host=localhost;dbname=bdd','root','');
            }
            catch (Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

            $req=$bdd->query('SELECT id FROM news');
?>

<?php 
 while($donnees = $req->fetch())
            {
            ?>
            <?php
     $id=$donnees['id'];
     echo $id;
     echo $_GET['$id'] ;
     if( isset( $_GET[$id] ) ) {
         
         $req = $bdd->prepare('DELETE FROM news WHERE id= :id');
        $req->execute(array(
            'id' => $donnees['id']
        )); 
         echo $donnees['id'];
         
     }
     else {
         //echo $donnees['id'];
     }
    ?>
            <?php
            }
            $req->closeCursor();
            ?>

>>>>>>> ccafe3b02aa1479c1018106e2f24af0844359001
<?php //header('Location: admin.php'); ?>