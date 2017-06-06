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
                <!-- Boutons centrales -->
                <div align="center">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="charpente">Charpente</button>
                    <button class="btn btn-default filter-button" data-filter="facade">Facade</button>
                    <button class="btn btn-default filter-button" data-filter="maconnerie">Maconnerie</button>
                    <button class="btn btn-default filter-button" data-filter="maison">Maison</button>

                </div>

                <div class="gallery">

                    <div class="filter charpente">
                        <a target="_blank" href="photos/charpente01.jpg">
                            <img src="photos/charpente01.jpg" alt="réalisation 2012">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/charpente02.jpg">
                            <img src="photos/charpente02.jpg" alt="Bourg-enBresse 2008">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/charpente03.jpg">
                            <img src="photos/charpente03.jpg" alt="Bip bap boup">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/charpente04.jpg">
                            <img src="photos/charpente04.jpg" alt="Ex photo de background">
                        </a>
                    </div>
                    <div class="filter x">
                        <a target="_blank" href="photos/facade01.jpg">
                            <img src="photos/facade01.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/facade02.JPG">
                            <img src="photos/facade02.JPG">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/facade03.jpg">
                            <img src="photos/facade03.jpg">
                        </a>
                    </div>
                    <div class="filter x">
                        <a target="_blank" href="photos/facade04.JPG">
                            <img src="photos/facade04.JPG">
                        </a>
                    </div>
                    <div class="filter x">
                        <a target="_blank" href="photos/facade05.jpg">
                            <img src="photos/facade05.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/facade06.JPG">
                            <img src="photos/facade06.JPG">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/facade07.JPG">
                            <img src="photos/facade07.JPG">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/facade08.JPG">
                            <img src="photos/facade08.JPG">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/facade09.JPG">
                            <img src="photos/facade09.JPG">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie01.jpg">
                            <img src="photos/maconnerie01.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie02.jpg">
                            <img src="photos/maconnerie02.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie02.jpg">
                            <img src="photos/maconnerie02.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie03.jpg">
                            <img src="photos/maconnerie03.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie04.jpg">
                            <img src="photos/maconnerie04.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie05.jpg">
                            <img src="photos/maconnerie05.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie06.jpg">
                            <img src="photos/maconnerie06.jpg">
                        </a>
                    </div>

                    <div class="filter x">
                        <a target="_blank" href="photos/maconnerie07.jpg">
                            <img src="photos/maconnerie07.jpg">
                        </a>
                    </div>
                </div>
            </section>

            <?php include("sidebar.php"); ?> <! Inclure le fichier "sidebar.php" >

        </div>

        <footer>
            <?php include("footer.php"); ?>
        </footer>

    </body>    
</html>
