


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Travaux de Charpente et Couverture - Ducrozet-Moninot</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="globalstyle.css">
        <link rel="stylesheet" href="style.css">
        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Scripts Javascript -->
        <SCRIPT language="javascript">
            $(document).ready(function(){
                $(".filter-button").click(function(){
                    var value = $(this).attr('data-filter');
                    if(value == "all")
                    {
                        //$('.filter').removeClass('hidden');
                        $('.filter').show('1000');
                    }
                    else
                    {
                        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                        $(".filter").not('.'+value).hide('3000');
                        $('.filter').filter('.'+value).show('3000');

                    }
                });

                if ($(".filter-button").removeClass("active")) {
                    $(this).removeClass("active");
                }
                $(this).addClass("active");

            });
        </SCRIPT>

    </head>


    <body>
        <header>

            <?php include("header.php"); ?>

            <?php include("navbar.php"); ?>

        </header>

        <div id="main">

            <section id="content">

                <div id="gallery_buttons">
                    <button class="btn btn-default filter-button" data-filter="all">Tout</button>
                    <button class="btn btn-default filter-button" data-filter="charpente">Charpente et Couverture</button>
                    <button class="btn btn-default filter-button" data-filter="facade">Facade</button>
                    <button class="btn btn-default filter-button" data-filter="maconnerie">Maçonnerie</button>
                    <button class="btn btn-default filter-button" data-filter="maison">Maisons Individuelles</button>
                </div>                

                <div class="gallery filter charpente">
                    <a target="_blank" href="charpente01.jpg">
                        <img src="images/charpente01.jpg" alt="réalisation 2012">
                    </a>
                </div>

                <div class="gallery filter charpente">
                    <a target="_blank" href="images/charpente02.jpg">
                        <img src="images/charpente02.jpg" alt="Bourg-enBresse 2008">
                    </a>
                </div>

                <div class="gallery filter charpente">
                    <a target="_blank" href="images/charpente03.jpg">
                        <img src="images/charpente03.jpg" alt="Bip bap boup">
                    </a>
                </div>

                <div class="gallery filter charpente">
                    <a target="_blank" href="images/charpente04.jpg">
                        <img src="images/charpente04.jpg" alt="Ex photo de background">
                    </a>
                </div>

                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade01.jpg">
                        <img src="images/facade01.jpg">
                    </a>
                </div>


                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade02.JPG">
                        <img src="images/facade02.JPG">
                    </a>
                </div>

                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade03.jpg">
                        <img src="images/facade03.jpg">
                    </a>
                </div>

                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade04.JPG">
                        <img src="images/facade04.JPG">
                    </a>
                </div>

                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade05.jpg">
                        <img src="images/facade05.jpg">
                    </a>
                </div>

                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade06.JPG">
                        <img src="images/facade06.JPG">
                    </a>
                </div>

                <div class="gallery  filter facade">
                    <a target="_blank" href="images/facade07.JPG">
                        <img src="images/facade07.JPG">
                    </a>
                </div>

                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade08.JPG">
                        <img src="images/facade08.JPG">
                    </a>
                </div>

                <div class="gallery filter facade">
                    <a target="_blank" href="images/facade09.JPG">
                        <img src="images/facade09.JPG">
                    </a>
                </div>

                <div class="gallery filter maconnerie">
                    <a target="_blank" href="images/maconnerie01.jpg">
                        <img src="images/maconnerie01.jpg">
                    </a>
                </div>

                <div class="gallery filter maconnerie">
                    <a target="_blank" href="images/maconnerie02.jpg">
                        <img src="images/maconnerie02.jpg">
                    </a>
                </div>

                <div class="gallery filter maconnerie">
                    <a target="_blank" href="images/maconnerie03.jpg">
                        <img src="images/maconnerie03.jpg">
                    </a>
                </div>

                <div class="gallery filter maconnerie">
                    <a target="_blank" href="images/maconnerie04.jpg">
                        <img src="images/maconnerie04.jpg">
                    </a>
                </div>

                <div class="gallery filter maconnerie">
                    <a target="_blank" href="images/maconnerie05.jpg">
                        <img src="images/maconnerie05.jpg">
                    </a>
                </div>

                <div class="gallery filter maconnerie">
                    <a target="_blank" href="images/maconnerie06.jpg">
                        <img src="images/maconnerie06.jpg">
                    </a>
                </div>

                <div class="gallery filter maconnerie">
                    <a target="_blank" href="images/maconnerie07.jpg">
                        <img src="images/maconnerie07.jpg">
                    </a>
                </div>

                <div class="gallery filter maison">
                    <a target="_blank" href="images/maison01.jpg">
                        <img src="images/maison01.jpg">
                    </a>
                </div>

                <div class="gallery filter maison">
                    <a target="_blank" href="images/maison02.jpg">
                        <img src="images/maison02.jpg">
                    </a>
                </div>

                <div class="gallery filter maison">
                    <a target="_blank" href="images/maison03.jpg">
                        <img src="images/maison03.jpg">
                    </a>
                </div>

                <div class="gallery filter maison">
                    <a target="_blank" href="images/maison04.jpg">
                        <img src="images/maison04.jpg">
                    </a>
                </div>

                <div class="gallery filter maison">
                    <a target="_blank" href="images/maison05.png">
                        <img src="images/maison05.png">
                    </a>
                </div>

                <div class="gallery filter maison">
                    <a target="_blank" href="images/maison06.JPG">
                        <img src="images/maison06.JPG">
                    </a>
                </div>

                <div class="gallery filter maison">
                    <a target="_blank" href="images/maison07.JPG">
                        <img src="images/maison07.JPG">
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