<!DOCTYPE html>
<html>    
    <head>
        <meta charset="utf-8">
        
        <title>TITRE</title>
                
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    
    
    <body>
        <header>
            
            <div id="header_head">
                
                <!--<div class="row">-->
                    
                    <div class="lamd3">
                        <img src="logo.png" alt="Logo de Ducrozet-Moninot" id="logo">
                    </div>
                    
                    <div class="lamd5">
                        <div id="header_contact"> 
                            99 Chemin de l'Étang Neuf
                            <br/>01000 St-Denis-lès-Bourg
                            <br/>Tel: 04.74.11.22.33
                        </div>
                    </div>
                    
                    <div class="lamd4">
                        <div id="header_buttons">
                            <div class="glyphicon glyphicon-envelope" aria-label="Bouton-Icône : Contact"></div>
                            <div class="glyphicon glyphicon-earphone" aria-label="Bouton-Icône : Téléphone"></div>
                            <div class="glyphicon glyphicon-map-marker" aria-label="Bouton-Icône : Localisation"></div>
                        </div>                    
                    </div>
                    
                <!--</div>-->
                
                </div>
    
            <nav id="navbar">
                <ul>
                    <li><a href="">Présentation</a></li>
                    <li><a href="">Maçonnerie</a></li>
                    <li><a href="">Charpente</a></li>
                    <li><a href="">Façade</a></li>
                    <li><a href="">Maisons</a></li>
                    <li><a href="realisations.html">Réalisations</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        
        </header>
    
        <div id="main">
        
            <section id="content">
                <p class="TEMP">
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                    CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE | CORPS DE PAGE |
                </p>
            </section>
        
        <aside id="sidebar">
            <div class="sidebar_btn">
                <a class="btn btn-default" href="deposer_avis.php" role="link-button">Laisser un Avis</a>
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
                    
                    
                    $req=$bdd->query('SELECT commentaire,DATE_FORMAT(date_commentaire,\'%d/%m/%Y\') AS date_commentaire_fr FROM commentaires ORDER BY date_commentaire');
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
        </div>
    
    <footer>
        <p id="legal">
            SARL Ducrozet-Moninot (c) | 200X-2017 | Tous droits réservés
            <br/>Réalisation : Dyvia F. / Simon H. / Florent P. / Tom-Brian G.
        </p>
    </footer>
        
    </body>    
</html>
