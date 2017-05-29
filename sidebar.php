 <SCRIPT language="javascript">
            function popup(page,nom,option) {
              window.open(page,nom,option);
            }
          </SCRIPT>
            
        <aside id="sidebar">
            <div class="sidebar_btn">
                <a class="btn btn-default" href="javascript:popup('popup.php','','top=200, height=100')" role="link-button">Laisser un Avis</a>
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
                    
                    
                    
                    ?>
                    <?php
                    
                    
                    $req=$bdd->query('SELECT commentaire,DATE_FORMAT(date_commentaire,\'%d/%m/%Y\') AS date_commentaire_fr FROM commentaires ORDER BY date_commentaire DESC');
                    //$req->execute(array($_GET['billet']));
                    while($donnees = $req->fetch())
                    {
                    ?>
                    <commentaire>
                        <?php echo $donnees['commentaire'];?> <br \>
                    </commentaire>
                    <date>
                        Le
                        <?php echo $donnees['date_commentaire_fr'];?> <br \>
                    </date>
                    <br \>
                    <?php
                    }
                    $req->closeCursor();
                    ?>
                </p>
            </div>
            
            <div class="sidebar_btn">
                <a class="btn btn-default" href="contact.html#devis" role="link-button">Demander un Avis</a>
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
