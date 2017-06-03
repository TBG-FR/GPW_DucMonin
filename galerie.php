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
            
            <?php include("header.php"); ?>
            
            <?php include("navbar.php"); ?>

        </header>
    
        <div id="main">
        
            <section id="content">
                
                 <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="charpente">Charpentes</button>
            <button class="btn btn-default filter-button" data-filter="facade">Facade</button>
            <button class="btn btn-default filter-button" data-filter="maconnerie">Maconnerie</button>
            <button class="btn btn-default filter-button" data-filter="maison">Maison</button>
        </div>
        <br/>
                
                
                <div class="gallery filter charpente">
                    <a target="_blank" href="charpente01.jpg">
                        <img src="charpente01.jpg" alt="réalisation 2012">
                    </a>
                </div>

                <div class="gallery filter charpente">
                    <a target="_blank" href="charpente02.jpg">
                        <img src="charpente02.jpg" alt="Bourg-enBresse 2008">
                    </a>
                </div>

                <div class="gallery filter charpente">
                    <a target="_blank" href="charpente03.jpg">
                        <img src="charpente03.jpg" alt="Bip bap boup">
                    </a>
                </div>

                <div class="gallery filter charpente">
                    <a target="_blank" href="charpente04.jpg">
                        <img src="charpente04.jpg" alt="Ex photo de background">
                    </a>
                </div>
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade01.jpg">
                        <img src="facade01.jpg">
                    </a>
                </div>
                
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade02.JPG">
                        <img src="facade02.JPG">
                    </a>
                </div>
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade03.jpg">
                        <img src="facade03.jpg">
                    </a>
                </div>
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade04.JPG">
                        <img src="facade04.JPG">
                    </a>
                </div>
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade05.jpg">
                        <img src="facade05.jpg">
                    </a>
                </div>
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade06.JPG">
                        <img src="facade06.JPG">
                    </a>
                </div>
                
                <div class="gallery  filter facade">
                    <a target="_blank" href="facade07.JPG">
                        <img src="facade07.JPG">
                    </a>
                </div>
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade08.JPG">
                        <img src="facade08.JPG">
                    </a>
                </div>
                
                <div class="gallery filter facade">
                    <a target="_blank" href="facade09.JPG">
                        <img src="facade09.JPG">
                    </a>
                </div>
                
                <div class="gallery filter maconnerie">
                    <a target="_blank" href="maconnerie01.jpg">
                        <img src="maconnerie01.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maconnerie">
                    <a target="_blank" href="maconnerie02.jpg">
                        <img src="maconnerie02.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maconnerie">
                    <a target="_blank" href="maconnerie03.jpg">
                        <img src="maconnerie03.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maconnerie">
                    <a target="_blank" href="maconnerie04.jpg">
                        <img src="maconnerie04.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maconnerie">
                    <a target="_blank" href="maconnerie05.jpg">
                        <img src="maconnerie05.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maconnerie">
                    <a target="_blank" href="maconnerie06.jpg">
                        <img src="maconnerie06.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maconnerie">
                    <a target="_blank" href="maconnerie07.jpg">
                        <img src="maconnerie07.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maison">
                    <a target="_blank" href="maison01.jpg">
                        <img src="maison01.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maison">
                    <a target="_blank" href="maison02.jpg">
                        <img src="maison02.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maison">
                    <a target="_blank" href="maison03.jpg">
                        <img src="maison03.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maison">
                    <a target="_blank" href="maison04.jpg">
                        <img src="maison04.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maison">
                    <a target="_blank" href="maison05bis.jpg">
                        <img src="maison05bis.jpg">
                    </a>
                </div>
                
                <div class="gallery filter maison">
                    <a target="_blank" href="maison06.JPG">
                        <img src="maison06.JPG">
                    </a>
                </div>
                
                 <div class="gallery filter maison">
                    <a target="_blank" href="maison07.JPG">
                        <img src="maison07.JPG">
                    </a>
                </div>

                
                
            </section>
        
     <?php include("sidebar.php"); ?> <! Inclure le fichier "sidebar.php" >
       
        </div>
    
    <footer>
        <?php include("footer.php"); ?>
    </footer>
        
    </body>    
</html>
