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

    </head>


    <body>
        <header>

            <?php include("header.php"); ?>

            <?php include("navbar.php"); ?>

        </header>

        <div id="main">

            <section id="content">
                <h1>Nous contacter</h1>

                <div id="contact">

                    <div id="contact_informations">
                        <!-- <h2>Informations de contact</h2> -->

                        <div class="c_info_element">
                            <div class="glyphicon glyphicon-earphone" aria-label="Icône Contact : Téléphone Fixe"></div>
                            04 74 23 27 61
                        </div>

                        <div class="c_info_element">
                            <div class="glyphicon glyphicon-phone" aria-label="Icône Contact : Téléphone Portable"></div>
                            06 66 16 68 03
                        </div>

                        <div class="c_info_element">
                            <div class="glyphicon glyphicon-map-marker" aria-label="Icône Contact : Localisation"></div>
                            99 Chemin de l'Étang Neuf <br />01000 Saint-Denis-les-Bourg
                        </div>

                        <div class="c_info_element">
                            <div class="glyphicon glyphicon-envelope" aria-label="Icône Contact : Mail"></div>
                            contact@ducrozet-moninot.fr
                        </div>
                    </div>

                    <div id="contact_formulaire">
                        <!-- <h2>Nous envoyer un message</h2> -->
                        <form action="/action_page.php">

                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                            <label for="country">Country</label>
                            <select id="country" name="country">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                            </select>

                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                            <input type="submit" value="Submit">

                        </form>
                    </div>
                    
                </div>                

            </section>

            <?php include("sidebar.php"); ?>

        </div>

        <footer>
            <?php include("footer.php"); ?>
        </footer>

    </body>    
</html>