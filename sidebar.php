<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<SCRIPT language="javascript">
    function popup(page,nom,option) {
        window.open(page,nom,option);
    }
    /* Permet de revenir à la Page Précédente */
    function goBack() {
        window.history.back();
    }
</SCRIPT>

<div class="text-center" id="returnbutton">
    <button type="button" onclick="goBack()" class="btn btn-default">Retourner à la Page Précédente</button>
</div>

<aside id="sidebar">
                <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"> Laisser un avis </button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Laisser un avis</h4>
                  </div>
                  <div class="modal-body">
                      
                      
                    <form action="envoyer.php" method="post" class="col-lg-6">

                    <div class="form-group">
                        <label for="textarea">Laisser un avis :</label>
                        <textarea id="textarea" type="textarea" class="form-control" name="textarea"></textarea>

                    </div>

                    <input type="submit" class="btn btn-default" value="Envoyer"/>

                      </form>  
                  </div>
                  <div class="modal-footer">
        
                    </div>
                </div>

              </div>
            </div>

    <div id="avis_show">
        <p>
            <?php 
            try {
                $bdd=new PDO ('mysql:host=localhost;dbname=bdd','root','');
            }
            catch (Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

            $req=$bdd->query('SELECT commentaire,DATE_FORMAT(date_commentaire,\'%d/%m/%Y\') AS date_commentaire_fr FROM commentaires WHERE afficher=1 ORDER BY date_commentaire DESC');
            //$req->execute(array($_GET['billet']));
            while($donnees = $req->fetch())
            {
            ?>
            <div id="separation">
            <div id="commentaireside">
                <?php echo $donnees['commentaire'];?> <br \>
            </div>
            <div id="dateside">
                Le
                <?php echo $donnees['date_commentaire_fr'];?> <br \>
            </div>
                
                </div>
        <div id="entre"></div>
            <br \>
            <?php
            }
            $req->closeCursor();
            ?>
        </p>
    </div>

    <div class="sidebar_btn">
        <a class="btn btn-default" href="contact.html#devis" role="link-button">Demander un Devis</a>
    </div>

    <div id="news_show">
        <p>
            { Affichage des dernières news }
            <br /> Voeux 2017
            <br />- par Admin, Janvier 2017
            <br />
            <br /> Nouveau Site
            <br />- Pierre, Mars 2016
            <br />
            <br /> Fête du BTP
            <br />- Jean, Juillet 2016
            <br />
        </p>                
    </div>

    <div class="sidebar_btn">
        <a class="btn btn-default" href="contact.html" role="link-button">Nous Contacter</a>
    </div>
</aside>

<div id="nosidebar">
    <p>
        Un menu a été caché car votre écran est trop petit pour l'afficher.<br />
        Il contient les avis, les nouveautés, et plusieurs boutons liés.<br />
    </p>
    <div class="text-center">
        <a href="sidebar_only.php" class="btn btn-default">Afficher le menu "Sidebar"</a>    
    </div>
</div>
